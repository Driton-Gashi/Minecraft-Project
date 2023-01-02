let mobs = [
  {
    src: "../assets/img/mobs/zombie.png",
    name: "Zombie",
    likeNr: Math.floor(Math.random() * 50),
    viewNr: Math.floor(Math.random() * 150),
  },
  {
    src: "../assets/img/mobs/evoker.png",
    name: "Evoker",
    likeNr: Math.floor(Math.random() * 50),
    viewNr: Math.floor(Math.random() * 150),
  }, 
  {
    src: "../assets/img/mobs/baby zombie.png",
    name: "Villager Baby Zombie",
    likeNr: Math.floor(Math.random() * 50),
    viewNr: Math.floor(Math.random() * 150),
  },
  {
    src: "../assets/img/mobs/blaze.png",
    name: "Blaze",
    likeNr: Math.floor(Math.random() * 50),
    viewNr: Math.floor(Math.random() * 150),
  },
  {
    src: "../assets/img/mobs/chicken.png",
    name: "Chicken Jockey",
    likeNr: Math.floor(Math.random() * 50),
    viewNr: Math.floor(Math.random() * 150),
  },
  {
    src: "../assets/img/mobs/Elder.png",
    name: "Elder Guardian",
    likeNr: Math.floor(Math.random() * 50),
    viewNr: Math.floor(Math.random() * 150),
  },
  {
    src: "../assets/img/mobs/ghast.png",
    name: "Ghast",
    likeNr: Math.floor(Math.random() * 50),
    viewNr: Math.floor(Math.random() * 150),
  },
  {
    src: "../assets/img/mobs/husk.png",
    name: "Husk",
    likeNr: Math.floor(Math.random() * 50),
    viewNr: Math.floor(Math.random() * 150),
  },
  {
    src: "../assets/img/mobs/phantom.png",
    name: "Phantom",
    likeNr: Math.floor(Math.random() * 50),
    viewNr: Math.floor(Math.random() * 150),
  },
  {
    src: "../assets/img/mobs/skeleton.png",
    name: "Skeleton",
    likeNr: Math.floor(Math.random() * 50),
    viewNr: Math.floor(Math.random() * 150),
  },
  {
    src: "../assets/img/mobs/vindicator.png",
    name: "Vindicator",
    likeNr: Math.floor(Math.random() * 50),
    viewNr: Math.floor(Math.random() * 150),
  },
  
];

let content = document.querySelector(".collection-body");
mobs.forEach((mob) => {
  let newBox = document.createElement("div");
  newBox.classList.add("collection-box");

  newBox.innerHTML = `
  <div class="collection-box-body">
  <img src="${mob.src}" alt="" />
  <h1 class="collection-box-title">${mob.name}</h1>
</div>
<div class="collection-box-footer">
  <span class="view-wrapper"
    ><i class="bi bi-eye-fill"></i>
    <span class="view-number">&ThinSpace; ${mob.viewNr}</span>
  </span>

  <span class="like-wrapper"
    ><i class="bi bi-suit-heart"></i
    ><span class="like-number">&ThinSpace; ${mob.likeNr}</span>
  </span>
</div>
            `;
  content.appendChild(newBox);
});



