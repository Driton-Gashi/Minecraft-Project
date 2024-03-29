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
// Nese klikon jasht profile menu automatikisht me e mbyll profile menu
document.body.addEventListener("click", (e) => {
  if (
    !e.target.classList.contains("profile-menu") &&
    !e.target.parentNode.classList.contains("profile") &&
    !e.target.parentNode.classList.contains("profile-menu") &&
    !e.target.parentNode.classList.contains("status-wrapper") &&
    !e.target.parentNode.classList.contains("edit-profile-li")
  ) {
    profileMenu.classList.add("hide");
    // nese user e mbyll profile menu gjat editimit me ju rujt t'dhanat
    inputName.setAttribute("disabled", "");
    if (inputName.value.length >= 6) {
      EmriPerdoruesit = inputName.value;
    } else {
      inputName.value = EmriPerdoruesit;
    }
    inputName.classList.remove("border");
  }
});

const logOut = () => {
  if (confirm("You are about to log out! \nare you sure?")) {
    window.location = "../php/logout.php";
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

// Change profile Status to active, busy or invisible
const profileStatus = document.querySelector(".status");
const statusChange = () => {
  if (profileStatus.value == "active") {
    profileOption.style.setProperty("--selection-background", "green");
  } else if (profileStatus.value == "busy") {
    profileOption.style.setProperty("--selection-background", "red");
  } else if (profileStatus.value == "invisible") {
    profileOption.style.setProperty("--selection-background", "white");
  } else {
  }
};
const inputName = document.querySelector(".name");
const changeName = () => {
  inputName.removeAttribute("disabled");
  inputName.focus();
  inputName.classList.add("border");
};
inputName.addEventListener("keypress", (e) => {
  if (e.key === "Enter") {
    inputName.setAttribute("disabled", "");
    // Nese useri e vendos emrin ma te shkurt se 6 shkronja ktheja emrin qysh e ka pas
    if (inputName.value.length >= 6) {
      EmriPerdoruesit = inputName.value;
    } else {
      inputName.value = EmriPerdoruesit;
    }
    inputName.classList.remove("border");
  }
});

// SUB PAGES BUTON FILTER when I click they get active class
const butons = document.querySelectorAll(".collection-buttons-wrapper button");
butons.forEach((button) => {
  button.addEventListener("click", (e) => {
    e.target.classList.add("active");
    removeClass(e.target);
  });
});
const removeClass = (e) => {
  butons.forEach((button) => {
    if (button == e) {
    } else {
      button.classList.remove("active");
    }
  });
};
const images = document.querySelectorAll(".profile img");

images.forEach((image) => {
  if (
    image.src.includes(".jpg") ||
    image.src.includes(".png") ||
    image.src.includes(".webp") ||
    image.src.includes(".jpeg")
  ) {
  } else {
    image.src = "../assets/img/icons/profile-image(default).png";
  }
});
const menu = document.querySelector(".menu");
const showMenu = () => {
  menu.classList.add("active");
  document.body.classList.add("noScroll");
};
const hideMenu = () => {
  menu.classList.remove("active");
  document.body.classList.remove("noScroll");
};

const inboxWrapper = document.querySelector(".inbox-wrapper");
const showInbox = () => {
  inboxWrapper.classList.add("active");
};
const hideInbox = () => {
  inboxWrapper.classList.remove("active");
};

const deleteInboxMessage = (id) => {
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      console.log("xhttp request was successful");
    } else {
      console.log("xhttp request failed");
    }
  };
  xhttp.open("GET", `../php/deleteInbox.php?id=${id}`, true);
  xhttp.send();
};

const deleteMessageBtn = document.querySelectorAll(".delete-message");

deleteMessageBtn.forEach((btn) => {
  btn.addEventListener("click", (e) => {
    e.target.closest(".inbox-message").classList.add("deleted");

    setTimeout(() => {
      e.target.closest(".inbox-message").classList.add("hide");
    }, 500);
  });
});
