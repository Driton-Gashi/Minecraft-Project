// Login Button Function
const loginButton = document.querySelector(".login button");
const username = document.querySelector(".username");
const password = document.querySelector(".password");
const loginErrorMessage = document.querySelector(".validation-message.l");
const registerErrorMessage = document.querySelector(".validation-message.r");
const registerBtn = document.querySelector(".register-message-btn.l");
const loginBtn = document.querySelector(".register-message-btn.r");

let message = "";
loginButton.addEventListener("mouseover", () => {
  if (validation(username)) {
    loginErrorMessage.classList.remove("hide");
    loginButton.classList.toggle("wrong-password");
    loginErrorMessage.textContent = message;
    return;
  } else if (validation(password)) {
    loginErrorMessage.classList.remove("hide");
    loginButton.classList.toggle("wrong-password");
    loginErrorMessage.textContent = message;
    return;
  } else {
    loginErrorMessage.classList.add("hide");
    loginButton.classList.remove("wrong-password");
  }
});
const emptyInputs = () => {
  username.value = "";
  password.value = "";
  loginErrorMessage.textContent = "";
};

const validation = (e) => {
  const content = e.value;
  if (content.length < 6) {
    message = `"${e.classList[0]}" contains less than 6 characters `;
    return true;
  }
  if (content.length > 16) {
    message = `"${e.classList[0]}" contains more than 16 characters `;
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
  registerErrorMessage.textContent = "";
});
loginBtn.addEventListener("click", () => {
  loginForm.classList.toggle("hide");
  registerForm.classList.toggle("hide");
  loginErrorMessage.textContent = "";
  registerErrorMessage.textContent = "";
});
