let mobs = [
  {
    src: "../assets/img/mobs/zombie.png",
    name: "Zombie",
    likeNr: Math.floor(Math.random() * 50),
    viewNr: Math.floor(Math.random() * 150),
  },
];

let content = document.querySelector(".collection-body");
let newBox = document.createElement("div");

mobs.forEach((mob) => {
  newBox.innerHTML = `<div class="collection-box">
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
            </div>`;
  content.appendChild(newBox);
});
