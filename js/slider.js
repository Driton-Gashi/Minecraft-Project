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
