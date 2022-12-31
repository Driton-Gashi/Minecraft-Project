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

// Main Banner automatic background change effect
// var mainBanner = document.querySelector(".background");
// var slideShowImages = ["171170.jpg", "171197.jpg", "171199.jpg"];
// var index = 0;
// setInterval(() => {
//   index == slideShowImages.length
//     ? (index = 0)
//     : (mainBanner.style.background = `linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 1)),
//   url(../assets/img/slideshow/${slideShowImages[index++]})`);
// }, 4000);
