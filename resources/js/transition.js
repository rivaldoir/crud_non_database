document.addEventListener("DOMContentLoaded", () => {
  document.body.classList.add("fade-in");

  document.querySelectorAll("a[href]").forEach(link => {
    if (link.getAttribute("href").startsWith("#") || link.getAttribute("target") === "_blank") return;
    link.addEventListener("click", e => {
      const href = link.getAttribute("href");
      e.preventDefault();
      document.body.classList.add("fade-out");
      setTimeout(() => window.location.href = href, 400);
    });
  });
});
// Parallax background lembut
const bg = document.createElement("div");
bg.classList.add("bg-parallax");
document.body.appendChild(bg);

document.addEventListener("mousemove", e => {
  const moveX = (e.clientX - window.innerWidth / 2) * 0.02;
  const moveY = (e.clientY - window.innerHeight / 2) * 0.02;
  bg.style.transform = `translate(${moveX}px, ${moveY}px) scale(1.05)`;
});
