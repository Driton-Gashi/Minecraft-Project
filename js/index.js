// About Minecraft Section Button effect
var learnMoreBtn = document.querySelector(".about .about-minecraft .btn");
learnMoreBtn.addEventListener("mouseover", () => {
  setTimeout(() => {
    learnMoreBtn.classList.toggle("about-minecraft-mouseover");
  }, 400);
});

learnMoreBtn.addEventListener("mouseout", () => {
  learnMoreBtn.classList.toggle("about-minecraft-mouseover");
});
const navigationAnchor = document.querySelectorAll(".menu li a");
navigationAnchor[0].href = "#top";
navigationAnchor[1].href = "#about";
navigationAnchor[2].href = "#contact";
