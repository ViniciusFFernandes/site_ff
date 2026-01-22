(function(){
  const tooltip = document.getElementById("mapTooltip");
  const sectors = document.querySelectorAll(".ff-map-overlay .sector");
  if (!tooltip || !sectors.length) return;

  sectors.forEach(p => {
    p.addEventListener("mousemove", (e) => {
      const name = p.getAttribute("data-sector") || "Setor";
      tooltip.textContent = name;
      tooltip.style.display = "block";
      tooltip.style.left = (e.offsetX + 14) + "px";
      tooltip.style.top  = (e.offsetY + 14) + "px";
    });

    p.addEventListener("mouseleave", () => {
      tooltip.style.display = "none";
    });
  });
})();
