// On Scroll Effect
window.onscroll = () => {
  myFunction();
};

var header = document.querySelector("header");

// Get the offset position of the navbar
var sticky = header.offsetTop;

// Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
var myFunction = () => {
  if (window.pageYOffset > sticky) {
    header.classList.add("header-aktive");
  } else {
    header.classList.remove("header-aktive");
  }
};

const minecraftAudio = document.querySelector(".minecraft-audio");
const mute = document.querySelector(".mute");
const unMute = document.querySelector(".unMute");

// play music
const playSound = () => {
  minecraftAudio.play();
  unMute.classList.toggle("hide");
  mute.classList.toggle("hide");
};

const stopSound = () => {
  minecraftAudio.pause();
  unMute.classList.toggle("hide");
  mute.classList.toggle("hide");
};

//play music
mute.addEventListener("click", playSound);

//stop music
unMute.addEventListener("click", stopSound);

// Profile Option add and remove
const profileOption = document.querySelector(".profile");
const profile = document.querySelector(".profile img");
const profileMenu = document.querySelector(".profile-menu");
let EmriPerdoruesit = "";
profile.addEventListener("click", () => {
  profileMenu.classList.toggle("hide");
});
document.body.addEventListener("click", (e) => {
  if (
    !e.target.classList.contains("profile-menu") &&
    !e.target.parentNode.classList.contains("profile") &&
    !e.target.parentNode.classList.contains("profile-menu")
  )
    profileMenu.classList.add("hide");
});

const logOut = () => {
  if (confirm("You are about to log out! \nare you sure?")) {
    profileOption.classList.add("hide");
    signUpBtn.classList.remove("hide");
  }
};
// Dropt down effect in the nav menu at "Guide" option
const dropdownParent = document.querySelector(".dropdown-parent ");
const dropdownMenu = document.querySelector(".dropdown");
const dropdownIcon = document.querySelector(".dropdown-icon");

dropdownParent.addEventListener("mouseover", () => {
  dropdownMenu.classList.remove("hide");
  dropdownIcon.classList.remove("bi-chevron-down");
  dropdownIcon.classList.add("bi-chevron-up");
});
dropdownParent.addEventListener("mouseout", () => {
  dropdownMenu.classList.add("hide");
  dropdownIcon.classList.add("bi-chevron-down");
  dropdownIcon.classList.remove("bi-chevron-up");
});
