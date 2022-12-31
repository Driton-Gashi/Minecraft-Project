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
// Here we will save the users
const users = [
  {
    username: "admin",
    password: "admin",
  },
  {
    username: "driton",
    password: "driton",
  },
  {
    username: "shota",
    password: "shota",
  },
];

loginButton.addEventListener("click", () => {
  // if user is registered successfully
  if (loginButton.textContent == "Register") {
    console.log("Registration was successful");

    EmriPerdoruesit = username.value;
    errorMessage.innerHTML = `<img  width="30px" src="./assets/img/icons/loading.gif" > Welcome ${EmriPerdoruesit}`;
    errorMessage.classList.remove("hide");
    errorMessage.classList.add("welcome");
    profileOption.classList.remove("hide");
    document.querySelector(".name").value = EmriPerdoruesit;
    signUpBtn.classList.add("hide");
    setTimeout(() => {
      signUpPage.classList.remove("show");
      document.body.classList.remove("noScroll");
      errorMessage.innerHTML = "";
      errorMessage.classList.remove("welcome");
      emptyInputs();
    }, 3000);

    // if user is Loged in successfully
  } else {
    users.forEach((user) => {
      if (
        user.username === username.value &&
        user.password === password.value
      ) {
        EmriPerdoruesit = username.value;
        errorMessage.innerHTML = `<img  width="30px" src="./assets/img/icons/loading.gif" > Welcome back ${EmriPerdoruesit}`;
        errorMessage.classList.remove("hide");
        errorMessage.classList.add("welcome");
        profileOption.classList.remove("hide");
        document.querySelector(".name").value = EmriPerdoruesit;
        signUpBtn.classList.add("hide");
        setTimeout(() => {
          signUpPage.classList.remove("show");
          document.body.classList.remove("noScroll");
          errorMessage.innerHTML = "";
          errorMessage.classList.remove("welcome");
          emptyInputs();
        }, 3000);
      }
    });
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
    ? document.querySelector(".keep-me-logged-in").classList.remove("hide")
    : document.querySelector(".keep-me-logged-in").classList.add("hide");
  emptyInputs();
});
