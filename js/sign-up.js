// Login Button Function
const loginButton = document.querySelector(".login button");
const username = document.querySelector(".username");
const password = document.querySelector(".password");
const loginErrorMessage = document.querySelector(".validation-message.l");
const registerErrorMessage = document.querySelector(".validation-message.r");
const registerBtn = document.querySelector(".register-message-btn.l");

const loginBtn = document.querySelector(".register-message-btn.r");
const registerButton = document.querySelector(".register button");
const usernameRegister = document.querySelector(".username.r");
const passwordRegister = document.querySelector(".password.r");
const confirmPassword = document.querySelector(".confirm-password");

let message = "";
loginButton.addEventListener("mouseover", () => {
  if (validation(username)) {
    loginErrorMessage.classList.remove("hide");
    registerErrorMessage.classList.remove("successful");

    loginButton.classList.toggle("wrong-password");
    loginErrorMessage.textContent = message;
    return;
  } else if (validation(password)) {
    loginErrorMessage.classList.remove("hide");
    registerErrorMessage.classList.remove("successful");

    loginButton.classList.toggle("wrong-password");
    loginErrorMessage.textContent = message;
    return;
  } else {
    loginErrorMessage.classList.add("hide");
    loginButton.classList.remove("wrong-password");
  }
});

registerButton.addEventListener("mouseover", () => {
  if (validation(usernameRegister)) {
    registerErrorMessage.classList.remove("hide");
    registerErrorMessage.classList.remove("successful");

    registerButton.classList.toggle("wrong-password");
    registerErrorMessage.textContent = message;
    return;
  } else if (validation(passwordRegister)) {
    registerErrorMessage.classList.remove("hide");
    registerErrorMessage.classList.remove("successful");

    registerButton.classList.toggle("wrong-password");
    registerErrorMessage.textContent = message;
    return;
  } else if (confirmPassword.value != passwordRegister.value) {
    registerErrorMessage.classList.remove("hide");
    registerErrorMessage.classList.remove("successful");

    registerButton.classList.toggle("wrong-password");
    registerErrorMessage.textContent =
      '"Confirm Password" should be same as "Password"';
    return;
  } else {
    registerErrorMessage.classList.add("hide");
    registerButton.classList.remove("wrong-password");
  }
});

const emptyInputs = () => {
  username.value = "";
  password.value = "";
  loginErrorMessage.textContent = "";
};
const emptyInputsRegister = () => {
  usernameRegister.value = "";
  passwordRegister.value = "";
  registerErrorMessage.textContent = "";
};

const validation = (e) => {
  const content = e.value;
  if (content.length < 6) {
    message = `"${e.classList[0]}" contains less than 6 characters `;
    return true;
  }
  if (content.length > 22) {
    message = `"${e.classList[0]}" contains more than 22 characters `;
    return true;
  }
  return false;
};

// when I click on Register on login Form
const loginForm = document.querySelector(".login");
const registerForm = document.querySelector(".register");
registerBtn.addEventListener("click", () => {
  loginForm.classList.toggle("hide");
  registerForm.classList.toggle("hide");
  loginErrorMessage.textContent = "";
  loginErrorMessage.classList.remove("successful");
  registerErrorMessage.textContent = "";
});
loginBtn.addEventListener("click", () => {
  loginForm.classList.toggle("hide");
  registerForm.classList.toggle("hide");
  loginErrorMessage.textContent = "";
  registerErrorMessage.textContent = "";
});

document.querySelector(".guest-btn").addEventListener("click", (e) => {
  setTimeout(() => {
    window.location = "./php/guest.php";
  }, 200);
});
