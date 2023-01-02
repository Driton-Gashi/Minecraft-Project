let tools = [
  {
    src: "../assets/img/mobs/apple.png",
    name: "Zombie",
    likeNr: Math.floor(Math.random() * 50),
    viewNr: Math.floor(Math.random() * 150),
  },
];

let content = document.querySelector(".collection-body");
tools.forEach((tool) => {
  let newBox = document.createElement("div");
  newBox.classList.add("collection-box");

  newBox.innerHTML = `
        <div class="collection-box-body">
        <img src="${tool.src}" alt="" />
        <h1 class="collection-box-title">${tool.name}</h1>
      </div>
      <div class="collection-box-footer">
        <span class="view-wrapper"
          ><i class="bi bi-eye-fill"></i>
          <span class="view-number">&ThinSpace;${tool.viewNr}</span>
        </span>
      
        <span class="like-wrapper"
          ><i class="bi bi-suit-heart like"></i
          ><span class="like-number">&ThinSpace;${tool.likeNr}</span>
        </span>
      </div>
      `;
  content.appendChild(newBox);
});
const hearts = Array.from(document.querySelectorAll(".like"));
hearts.forEach((heart) => {
  let isClicked = false;
  heart.addEventListener("click", (e) => {
    let likeNumber = parseInt(e.target.parentNode.childNodes[1].textContent);
    if (!isClicked) {
      likeNumber++;
      e.target.parentNode.childNodes[1].innerHTML = `&ThinSpace;${likeNumber}`;
      isClicked = true;
      e.target.classList.remove("bi-suit-heart");
      e.target.classList.add("bi-suit-heart-fill");
    } else {
      likeNumber--;
      e.target.parentNode.childNodes[1].innerHTML = `&ThinSpace;${likeNumber}`;
      e.target.classList.remove("bi-suit-heart-fill");
      e.target.classList.add("bi-suit-heart");
      isClicked++;
      isClicked = false;
    }
  });
});
