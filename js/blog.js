// If Images are not loaded properly
const images = document.querySelectorAll(".left img");

images.forEach((image) => {
  if (
    image.src.includes(".jpg") ||
    image.src.includes(".png") ||
    image.src.includes(".webp") ||
    image.src.includes(".jpeg")
  ) {
  } else {
    image.src = "../assets/img/background/Image_not_available.png";
  }
});

const postRreadMoreBtn = document.querySelectorAll(".post-footer .read-more");
postRreadMoreBtn.forEach((btn) => {
  btn.addEventListener("click", (e) => {
    e.target.parentNode.parentNode.childNodes[3].classList.toggle("active");
  });
});

const deletePostBtn = document.querySelectorAll(".post-footer .delete");
deletePostBtn.forEach((btn) => {
  btn.addEventListener("click", (e) => {
    e.target.closest(".post").classList.add("scrollUp");
  });
});

const messageBoxClose = document.querySelector(".close-message-box");
messageBoxClose.addEventListener("click", (e) => {
  e.target.parentNode.style.display = "none";
});
