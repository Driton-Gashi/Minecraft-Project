let tools = [
  {
    src: "../assets/img/tools/diamond sword.png",
    name: "Zombie",
    likeNr: Math.floor(Math.random() * 50),
    viewNr: Math.floor(Math.random() * 150),
  },
  {
    src: "../assets/img/tools/golden sword.png",
    name: "Gold Sword",
    likeNr: Math.floor(Math.random() * 50),
    viewNr: Math.floor(Math.random() * 150),
  },
  {
    src: "../assets/img/tools/diamond hoe.png",
    name: "Diamond Hoe",
    likeNr: Math.floor(Math.random() * 50),
    viewNr: Math.floor(Math.random() * 150),
  },
  {
    src: "../assets/img/tools/gold hoe.png",
    name: "Gold Hoe",
    likeNr: Math.floor(Math.random() * 50),
    viewNr: Math.floor(Math.random() * 150),
  },
  {
    src: "../assets/img/tools/diamond pickaxe.png",
    name: "Diamond Pickaxe",
    likeNr: Math.floor(Math.random() * 50),
    viewNr: Math.floor(Math.random() * 150),
  },
  {
    src: "../assets/img/tools/gold pickaxe.png",
    name: "Gold Pickaxe",
    likeNr: Math.floor(Math.random() * 50),
    viewNr: Math.floor(Math.random() * 150),
  },
  {
    src: "../assets/img/tools/diamond axe.png",
    name: "Diamond Axe",
    likeNr: Math.floor(Math.random() * 50),
    viewNr: Math.floor(Math.random() * 150),
  },
  {
    src: "../assets/img/tools/gold axe.png",
    name: "Gold Axe",
    likeNr: Math.floor(Math.random() * 50),
    viewNr: Math.floor(Math.random() * 150),
  },
  {
    src: "../assets/img/tools/diamond shovel.png",
    name: "Diamond Shovel",
    likeNr: Math.floor(Math.random() * 50),
    viewNr: Math.floor(Math.random() * 150),
  },
  {
    src: "../assets/img/tools/gold shovel.png",
    name: "Gold Shovel",
    likeNr: Math.floor(Math.random() * 50),
    viewNr: Math.floor(Math.random() * 150),
  },
  {
    src: "../assets/img/tools/fishing.png",
    name: "Fishing Rod",
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
