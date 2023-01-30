const hearts = document.querySelectorAll(".like");
let isClicked = false;

hearts.forEach((heart) => {
  heart.addEventListener("click", (e) => {
    let likeNumber = parseInt(e.target.parentNode.childNodes[1].textContent);
    if (e.target.classList.contains("bi-suit-heart-fill")) {
      likeNumber--;
      e.target.classList.remove("bi-suit-heart-fill");
      e.target.classList.add("bi-suit-heart");
      e.target.parentNode.childNodes[1].innerHTML = `&ThinSpace;${likeNumber}`;
    } else {
      likeNumber++;
      e.target.classList.add("bi-suit-heart-fill");
      e.target.classList.remove("bi-suit-heart");
      e.target.parentNode.childNodes[1].innerHTML = `&ThinSpace;${likeNumber}`;
    }
  });
});

// Search function
const searchInput = document.querySelector(".collection-search-input");
const searchBtn = document.querySelector(".collection-search-btn");
searchBtn.addEventListener("click", () => {
  let text = searchInput.value.toLowerCase();
  let boxes = document.querySelectorAll(".collection-box");

  Array.from(boxes).forEach((box) => {
    let boxName = box.childNodes[1].childNodes[3].textContent;
    if (boxName.toLocaleLowerCase().indexOf(text) != -1) {
      box.style.display = "block";
    } else {
      box.style.display = "none";
    }
  });
});

const filterBox = (text) => {
  let boxes = document.querySelectorAll(".collection-box");

  Array.from(boxes).forEach((box) => {
    let boxName = box.childNodes[1].childNodes[3].textContent;
    if (boxName.toLocaleLowerCase().indexOf(text.toLocaleLowerCase()) != -1) {
      box.style.display = "block";
    } else {
      box.style.display = "none";
    }
  });
};

function like(id, table) {
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
    } else {
    }
  };

  xhttp.open("GET", `../php/like.php?id=${id}&table=${table}`, true);
  xhttp.send();
}
