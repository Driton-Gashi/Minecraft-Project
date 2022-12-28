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

const signUpBtn = document.querySelector(".header-icons .btn");
const CloseBtn = document.querySelector("#sign-up .close img");
const signUpPage = document.querySelector("#sign-up");
signUpBtn.addEventListener("click", () => {
  signUpPage.classList.add("show");
  document.body.classList.add("noScroll");
});

CloseBtn.addEventListener("click", () => {
  signUpPage.classList.remove("show");
  document.body.classList.remove("noScroll");
  emptyInputs();
});

// About Minecraft Section Button effect
var learnMoreBtn = document.querySelector(".about .about-minecraft .btn");
learnMoreBtn.addEventListener("mouseover", () => {
  setTimeout(() => {
    learnMoreBtn.classList.toggle("about-minecraft-mouseover");
  }, 400);
});

learnMoreBtn.addEventListener("mouseout", () => {
  learnMoreBtn.classList.toggle("about-minecraft-mouseover");
});

// Login Button Function
const loginButton = document.querySelector(".sign-up-form button");
const username = document.querySelector(".username");
const password = document.querySelector(".password");
const errorMessage = document.querySelector(".validation-message");
const register = document.querySelector(".register-message-btn");
const confirmPassword = document.querySelector(".confirm-password");
const confirmPasswordLabel = document.querySelector(".confirm-password-label");
const registerMessage = document.querySelector(".register-message");
const robotVerification = document.querySelector(".keep-me-logged-in input");

let message = "";
loginButton.addEventListener("mouseover", () => {
  // If button is on Register
  if (loginButton.textContent == "Register") {
    if (validation(username)) {
      errorMessage.classList.remove("hide");
      loginButton.classList.toggle("wrong-password");
      errorMessage.textContent = message;
      return;
    } else if (validation(password)) {
      errorMessage.classList.remove("hide");
      loginButton.classList.toggle("wrong-password");
      errorMessage.textContent = message;
      return;
    } else if (validation(confirmPassword)) {
      errorMessage.classList.remove("hide");
      loginButton.classList.toggle("wrong-password");
      errorMessage.textContent = message;
      return;
    } else {
      errorMessage.classList.add("hide");
      loginButton.classList.remove("wrong-password");
    }
  }
  // If button is on Log In
  if (loginButton.textContent == "Login") {
    if (validation(username)) {
      errorMessage.classList.remove("hide");
      loginButton.classList.toggle("wrong-password");
      errorMessage.textContent = message;
      return;
    } else if (validation(password)) {
      errorMessage.classList.remove("hide");
      loginButton.classList.toggle("wrong-password");
      errorMessage.textContent = message;
      return;
    } else {
      errorMessage.classList.add("hide");
      loginButton.classList.remove("wrong-password");
    }
  }
});
const emptyInputs = () => {
  username.value = "";
  password.value = "";
  confirmPassword.value = "";
  robotVerification.checked = false;
  errorMessage.textContent = "";
};

loginButton.addEventListener("click", () => {
  // if user is registered successfully
  if (loginButton.textContent == "Register") {
    console.log("Registration was successful");

    EmriPerdoruesit = username.value;
    errorMessage.innerHTML = `<img  width="30px" src="./assets/img/loading.gif" > Welcome ${EmriPerdoruesit}`;
    errorMessage.classList.remove("hide");
    errorMessage.classList.add("welcome");
    profileOption.classList.remove("hide");
    document.querySelector(".name").textContent = EmriPerdoruesit;
    signUpBtn.classList.add("hide");
    setTimeout(() => {
      signUpPage.classList.remove("show");
      document.body.classList.remove("noScroll");
      errorMessage.innerHTML = "";
      errorMessage.classList.remove("welcome");
      emptyInputs();
    }, 3000);

    // if user is Log in successfully
  } else {
    console.log("Login was successful");
  }
});
const validation = (e) => {
  if (loginButton.textContent == "Login") {
    const content = e.value;
    if (content.length < 6) {
      message = `"${e.classList[0]}" contains less than 6 characters `;
      return true;
    }
    if (content.length > 16) {
      message = `"${e.classList[0]}" contains more than 16 characters `;
      return true;
    }
    if (!robotVerification.checked) {
      message = `You are a robot access denied!`;
      return true;
    }

    return false;
  } else {
    const content = e.value;
    if (content.length < 6) {
      message = `"${e.classList[0]}" contains less than 6 characters `;
      return true;
    }
    if (content.length > 16) {
      message = `"${e.classList[0]}" contains more than 16 characters `;
      return true;
    }
    if (e.classList[0] == "confirm-password" && content != password.value) {
      message = `"Confirm Password" should be the same as "Password"`;
      return true;
    }

    return false;
  }
};

// Register Form show button
register.addEventListener("click", () => {
  confirmPassword.classList.toggle("hide");
  confirmPasswordLabel.classList.toggle("hide");

  document.querySelector(".haveAccount").textContent =
    confirmPassword.classList.contains("hide")
      ? "Don't have an account"
      : "Have an account";

  register.textContent = confirmPassword.classList.contains("hide")
    ? "Register"
    : "Login";

  loginButton.textContent = confirmPassword.classList.contains("hide")
    ? "Login"
    : "Register";

  // Remove "are you a robot" checkbox if user is in register form
  confirmPassword.classList.contains("hide")
    ? ""
    : document.querySelector(".keep-me-logged-in").classList.add("hide");
  emptyInputs();
});

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
  if (confirm("Are you sure you want to log out!")) {
    alert("logged out");
  }
};
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
// Main Banner automatic background change effect
// var mainBanner = document.querySelector(".background");
// var slideShowImages = ["171170.jpg", "171197.jpg", "171199.jpg"];
// var index = 0;
// setInterval(() => {
//   index == slideShowImages.length
//     ? (index = 0)
//     : (mainBanner.style.background = `linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 1)),
//   url(../assets/img/slideshow/${slideShowImages[index++]})`);
// }, 4000);
