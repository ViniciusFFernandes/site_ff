/**
 * FFReciclagem — Padrão (base)
 * - Smooth scroll (já habilitado via CSS)
 * - Atualiza ano no footer
 * - Formulário -> WhatsApp
 */
(function(){
  const yearEl = document.querySelector("[data-current-year]");
  if (yearEl) yearEl.textContent = new Date().getFullYear();

  // Navbar: fecha offcanvas ao clicar em um link
  document.querySelectorAll(".offcanvas a.nav-link").forEach(link => {
    link.addEventListener("click", () => {
      const offcanvasEl = document.getElementById("offcanvasNav");
      if (!offcanvasEl) return;
      const offcanvas = bootstrap.Offcanvas.getInstance(offcanvasEl);
      if (offcanvas) offcanvas.hide();
    });
  });
  

  // Form -> WhatsApp (sem backend)
  const form = document.querySelector("[data-wa-form]");
  if (form){
    form.addEventListener("submit", (e) => {
      e.preventDefault();

      const phone = form.getAttribute("data-wa-phone") || "";
      const baseMsg = form.getAttribute("data-wa-default-message") || "";

      const name = (form.querySelector("[name='name']")?.value || "").trim();
      const email = (form.querySelector("[name='email']")?.value || "").trim();
      const phoneUser = (form.querySelector("[name='phone']")?.value || "").trim();
      const message = (form.querySelector("[name='message']")?.value || "").trim();

      const parts = [];
      if (baseMsg) parts.push(baseMsg);
      if (name) parts.push(`Nome: ${name}`);
      if (email) parts.push(`E-mail: ${email}`);
      if (phoneUser) parts.push(`Telefone: ${phoneUser}`);
      if (message) parts.push(`Mensagem: ${message}`);

      const finalText = encodeURIComponent(parts.join("\n"));
      const url = `https://wa.me/${phone}?text=${finalText}`;

      window.open(url, "_blank", "noopener,noreferrer");
    });
  }

  // Botões com data-wa-cta-msg (monta msg por botão)
  document.querySelectorAll("[data-wa-cta-msg]").forEach(btn => {
    btn.addEventListener("click", () => {
      const phone = btn.getAttribute("data-wa-phone") || "";
      const msg = btn.getAttribute("data-wa-cta-msg") || "";
      if (!phone) return;
      const url = `https://wa.me/${phone}?text=${encodeURIComponent(msg)}`;
      window.open(url, "_blank", "noopener,noreferrer");
    });
  });
})();
