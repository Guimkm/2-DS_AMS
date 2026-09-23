// Eventos delegados no document: continuam valendo depois que o Barba troca o conteúdo.

// Excluir: abre a janela de confirmação
document.addEventListener("click", (ev) => {
  const abrir = ev.target.closest("[data-excluir]");
  if (abrir) {
    document.getElementById("dlg-nome").textContent = abrir.dataset.nome;
    document.getElementById("dlg-id").value = abrir.dataset.id;
    document.getElementById("dlg-excluir").showModal();
  }
  if (ev.target.closest("[data-fechar]")) document.getElementById("dlg-excluir").close();
  if (ev.target.id === "dlg-excluir") ev.target.close(); // clique no fundo
});

// Busca e filtro de situação na tabela
function filtrar() {
  const texto = (document.getElementById("busca")?.value || "").toLowerCase().trim();
  const status = document.getElementById("filtro-status")?.value || "";
  let visiveis = 0;
  document.querySelectorAll("tbody tr[data-status]").forEach((tr) => {
    const ok = tr.textContent.toLowerCase().includes(texto) && (!status || tr.dataset.status === status);
    tr.hidden = !ok;
    if (ok) visiveis++;
  });
  const aviso = document.querySelector(".sem-resultado");
  if (aviso) aviso.hidden = visiveis > 0;
}
document.addEventListener("input", (ev) => { if (ev.target.id === "busca") filtrar(); });
document.addEventListener("change", (ev) => { if (ev.target.id === "filtro-status") filtrar(); });
