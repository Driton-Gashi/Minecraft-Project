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

// Slider
const slider = document.querySelector(".moving");

const forward = () => {
  if (slider.classList.contains("forward-1")) {
    slider.classList.remove("forward-1");
    slider.classList.add("forward-2");
  } else if (slider.classList.contains("forward-2")) {
    slider.classList.remove("forward-2");
  } else if (slider.classList.length == 1) {
    slider.classList.add("forward-1");
  } else if (slider.classList.contains("backward-2")) {
    slider.classList.remove("backward-2");
    slider.classList.add("backward-1");
  } else if (slider.classList.contains("backward-1")) {
    slider.classList.remove("backward-1");
  }
  clearInterval(automaticSliderInterval);
  automaticSliderInterval = setInterval(automaticSlider, 5000);
};
const back = () => {
  if (slider.classList.contains("forward-1")) {
    slider.classList.remove("forward-1");
  } else if (slider.classList.contains("forward-2")) {
    slider.classList.remove("forward-2");
    slider.classList.add("forward-1");
  } else if (slider.classList.length == 1) {
    slider.classList.add("backward-1");
  } else if (slider.classList.contains("backward-1")) {
    slider.classList.remove("backward-1");
    slider.classList.add("backward-2");
  } else {
    slider.classList.remove("backward-2");
  }
  clearInterval(automaticSliderInterval);
  automaticSliderInterval = setInterval(automaticSlider, 5000);
};
const automaticSlider = () => {
  if (slider.classList.contains("forward-2")) {
    slider.classList.remove("forward-2");
    slider.classList.add("forward-1");
  } else if (slider.classList.contains("forward-1")) {
    slider.classList.remove("forward-1");
  } else if (slider.classList.length == 1) {
    slider.classList.add("backward-1");
  } else if (slider.classList.contains("backward-1")) {
    slider.classList.remove("backward-1");
    slider.classList.add("backward-2");
  } else {
    slider.classList.remove("backward-2");
    slider.classList.add("forward-2");
  }
};
let automaticSliderInterval = setInterval(automaticSlider, 5000);

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
