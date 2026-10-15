const reduzMovimento = window.matchMedia(
  "(prefers-reduced-motion: reduce)",
).matches;
const SUAVE = "cubic-bezier(.2,.8,.2,1)";

/* ---------- Letras que rolam ---------- */

// Monta o texto letra por letra (cada letra dentro de uma "janela" que corta o movimento)
function montarTexto(el, texto) {
  el.textContent = "";

  const leitor = document.createElement("span");
  leitor.className = "sr-only";
  leitor.textContent = texto;

  const visivel = document.createElement("span");
  visivel.setAttribute("aria-hidden", "true");

  const palavras = texto.split(" ");
  palavras.forEach((p, i) => {
    const palavra = document.createElement("span");
    palavra.className = "palavra";
    for (const letra of p) {
      const janela = document.createElement("span");
      janela.className = "ch";
      const interna = document.createElement("span");
      interna.className = "ch-in";
      interna.textContent = letra;
      janela.append(interna);
      palavra.append(janela);
    }
    visivel.append(palavra);
    if (i < palavras.length - 1) visivel.append(" ");
  });

  el.append(leitor, visivel);
  return [...visivel.querySelectorAll(".ch-in")];
}

// dir = 1: o texto novo sobe de baixo | dir = -1: o texto novo desce de cima
async function rolar(el, texto, dir = 1) {
  const token = (el._token = Symbol());
  el.getAnimations({ subtree: true }).forEach((a) => a.cancel());

  const antigas = [...el.querySelectorAll(".ch-in")];

  if (!reduzMovimento && antigas.length) {
    await Promise.all(
      antigas.map((c, i) =>
        c
          .animate(
            [
              { transform: "translateY(0)", opacity: 1 },
              { transform: `translateY(${-dir * 110}%)`, opacity: 0 },
            ],
            {
              duration: 260,
              delay: Math.min(i * 14, 400),
              easing: "cubic-bezier(.5,0,.8,.4)",
              fill: "forwards",
            },
          )
          .finished.catch(() => {}),
      ),
    );
    if (el._token !== token) return; // chegou uma consulta mais nova
  }

  const novas = montarTexto(el, texto);
  if (reduzMovimento) return;

  novas.forEach((c, i) =>
    c.animate(
      [
        { transform: `translateY(${dir * 110}%)`, opacity: 0 },
        { transform: "translateY(0)", opacity: 1 },
      ],
      {
        duration: 480,
        delay: Math.min(i * 22, 600),
        easing: SUAVE,
        fill: "backwards",
      },
    ),
  );
}

/* ---------- Transição da bandeira ---------- */

async function trocarBandeira(url) {
  const img = document.getElementById("bandeira");
  const vazia = document.getElementById("bandeiraVazia");

  // carrega a nova imagem antes de começar a animação
  const nova = new Image();
  nova.src = url;
  try {
    await nova.decode();
  } catch {
    /* segue mesmo assim */
  }

  if (!reduzMovimento && !img.hidden) {
    const saida = img.animate(
      [
        { opacity: 1, transform: "scale(1)", clipPath: "inset(0 0 0 0)" },
        { opacity: 0, transform: "scale(1.08)", clipPath: "inset(0 0 0 100%)" },
      ],
      { duration: 350, easing: "cubic-bezier(.5,0,.8,.4)", fill: "forwards" },
    );
    await saida.finished.catch(() => {});
    img.src = url;
    saida.cancel();
  } else {
    img.src = url;
  }

  img.hidden = false;
  vazia.hidden = true;

  if (!reduzMovimento) {
    img.animate(
      [
        { opacity: 0, transform: "scale(.94)", clipPath: "inset(0 100% 0 0)" },
        { opacity: 1, transform: "scale(1)", clipPath: "inset(0 0 0 0)" },
      ],
      { duration: 650, easing: SUAVE },
    );
  }
}

/* ---------- Consulta ---------- */

async function consultarPais() {
  const nome = document.getElementById("pais").value.trim();
  const mensagem = document.getElementById("mensagem");
  const botao = document.getElementById("botao");

  mensagem.textContent = "";

  if (nome === "") {
    mensagem.textContent = "Digite o nome de um país para consultar.";
    return;
  }

  botao.disabled = true;
  botao.textContent = "Consultando…";

  try {
    const API_KEY = "rc_live_2d0bbc1e7cdb4ccfb5178d5f4231b3df";

    const url = `https://api.restcountries.com/countries/v5?q=${encodeURIComponent(nome)}`;

    const resp = await fetch(url, {
      headers: { Authorization: `Bearer ${API_KEY}` },
    });

    if (!resp.ok) throw new Error(`Erro HTTP ${resp.status}`);

    const json = await resp.json();
    const pais = json.data.objects[0]; // a lista de países fica em data.objects

    if (!pais) {
      mensagem.textContent =
        "País não encontrado. Confira a grafia e tente de novo.";
      return;
    }

    console.log(pais);

    const resultado = {
      nome: pais.names.common,
      nomePt: pais.names.translations?.por?.common,
      capital: pais.capitals?.[0]?.name,
      regiao: pais.region,
      subregiao: pais.subregion,
      populacao: pais.population,
      moeda: pais.currencies?.[0]?.name,
      idiomas: (pais.languages ?? []).map((l) => l.name),
      bandeira: pais.flag?.url_png,
      timezones: pais.timezones ?? [],
    };

    // [id do elemento, texto novo, direção: 1 = rola para cima, -1 = rola para baixo]
    const campos = [
      ["nomePais", resultado.nomePt ?? resultado.nome, 1],
      ["capital", resultado.capital ?? "—", -1],
      ["regiao", resultado.regiao ?? "—", 1],
      ["subRegiao", resultado.subregiao ?? "—", -1],
      ["populacao", resultado.populacao?.toLocaleString("pt-BR") ?? "—", 1],
      ["moeda", resultado.moeda ?? "—", -1],
      ["linguagens", resultado.idiomas.join(", ") || "—", 1],
      ["timeZones", resultado.timezones.join(", ") || "—", -1],
    ];

    campos.forEach(([id, texto, dir]) =>
      rolar(document.getElementById(id), texto, dir),
    );

    if (resultado.bandeira) trocarBandeira(resultado.bandeira);
  } catch (erro) {
    console.log(erro);
    mensagem.textContent =
      "Não foi possível consultar a API. Tente novamente em instantes.";
  } finally {
    botao.disabled = false;
    botao.textContent = "Consultar";
  }
}

/* ---------- Inicialização ---------- */

document.getElementById("formulario").addEventListener("submit", (e) => {
  e.preventDefault();
  consultarPais();
});

// deixa os campos prontos para rolar na primeira consulta
["nomePais", "capital", "regiao", "subRegiao", "populacao", "moeda", "linguagens", "timeZones"].forEach(
  (id) => montarTexto(document.getElementById(id), "—"),
);
