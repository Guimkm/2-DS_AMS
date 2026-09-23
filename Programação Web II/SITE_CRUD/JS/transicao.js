gsap.registerPlugin(DrawSVGPlugin); // permite que o gsap desenhe o svg

const svgPath = document.querySelector(".divSvg path");
const reduzir = window.matchMedia("(prefers-reduced-motion: reduce)").matches;
const tempo = reduzir ? 0.01 : 1;

gsap.set(svgPath, { drawSVG: "0%", strokeWidth: 2 });

// Marca o item do menu da página atual (o menu fica fixo, só o conteúdo troca)
function marcarMenu(url) {
  const atual = new URL(url, location.href).pathname.split("/").pop() || "index.php";
  document.querySelectorAll(".nav ul a").forEach((a) => {
    const destino = a.getAttribute("href");
    const ehForm = atual === "form.php" && new URL(url, location.href).searchParams.get("e") + ".php" === destino;
    if (destino === atual || ehForm) a.setAttribute("aria-current", "page");
    else a.removeAttribute("aria-current");
  });
}

barba.hooks.beforeEnter((data) => {
  // O Barba não atualiza o <title> sozinho
  const proximo = new DOMParser().parseFromString(data.next.html, "text/html");
  document.title = proximo.title;
  marcarMenu(data.next.url.href);
});

barba.init({
  preventRunning: true, // não deixa a transição ser interrompida
  transitions: [
    {
      name: "svg-transition",
      leave() {
        return gsap.to(svgPath, { drawSVG: "100%", strokeWidth: 300, duration: tempo });
      },
      enter() {
        window.scrollTo(0, 0); // volta ao topo enquanto a tela está coberta
        return gsap
          .timeline()
          .to(svgPath, { drawSVG: "100% 100%", strokeWidth: 2, duration: tempo })
          .set(svgPath, { drawSVG: "0%", strokeWidth: 2 });
      },
    },
  ],
});
