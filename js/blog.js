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

const postRreadMoreBtn = document.querySelectorAll(".read-more");
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
if (messageBoxClose == null) {
  console.log("messageBoxClose is " + messageBoxClose);
} else {
  messageBoxClose.addEventListener("click", (e) => {
    e.target.parentNode.style.display = "none";
  });
}

const editButton = document.querySelectorAll(".editForm");
const cancelButton = document.querySelectorAll(".cancel");
const confirmButton = document.querySelectorAll(".confirm");
editButton.forEach((button, index) => {
  button.addEventListener("click", (e) => {
    const titleInput = e.target.parentNode.parentNode.childNodes[1];
    const contentInput = e.target.parentNode.parentNode.childNodes[3];
    const cancel = e.target.parentNode.childNodes[5];
    const deleteB = e.target.parentNode.childNodes[7];
    const confirm = e.target.parentNode.childNodes[9];
    e.target.classList.add("hide");
    cancel.classList.remove("hide");
    titleInput.removeAttribute("disabled");
    contentInput.removeAttribute("disabled");
    titleInput.classList.add("border");
    contentInput.classList.add("border");
    titleInput.focus();
    deleteB.classList.add("hide");
    confirm.classList.remove("hide");
  });
});
cancelButton.forEach((button, index) => {
  button.addEventListener("click", (e) => {
    const titleInput = e.target.parentNode.parentNode.childNodes[1];
    const contentInput = e.target.parentNode.parentNode.childNodes[3];
    const edit = e.target.parentNode.childNodes[3];
    const deleteB = e.target.parentNode.childNodes[7];
    const confirm = e.target.parentNode.childNodes[9];
    e.target.classList.add("hide");
    edit.classList.remove("hide");
    titleInput.removeAttribute("disabled");
    contentInput.removeAttribute("disabled");
    titleInput.classList.remove("border");
    contentInput.classList.remove("border");
    deleteB.classList.remove("hide");
    confirm.classList.add("hide");
  });
});
