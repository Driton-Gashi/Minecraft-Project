// If Images are not loaded properly
const allImages = document.querySelectorAll(".left img");

allImages.forEach((image) => {
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
let lastHref;
editButton.forEach((button, index) => {
  button.addEventListener("click", (e) => {
    const titleInput =
      e.target.parentNode.parentNode.childNodes[1].childNodes[0];
    const contentInput = e.target.parentNode.parentNode.childNodes[3];
    const cancel = e.target.parentNode.childNodes[5];
    const deleteB = e.target.parentNode.childNodes[7];
    const confirm = e.target.parentNode.childNodes[9];
    lastHref = e.target.parentNode.parentNode.childNodes[1].href;
    e.target.parentNode.parentNode.childNodes[1].removeAttribute("href");
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
    const titleInput =
      e.target.parentNode.parentNode.childNodes[1].childNodes[0];
    const contentInput = e.target.parentNode.parentNode.childNodes[3];
    e.target.parentNode.parentNode.childNodes[1].setAttribute("href", lastHref);
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

const deletePost = (id) => {
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      console.log("xhttp request was successful");
    } else {
      console.log("xhttp request failed");
    }
  };
  xhttp.open("GET", `../php/delete.php?id=${id}`, true);
  xhttp.send();
};
