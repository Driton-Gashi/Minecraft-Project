// Login Button Function
const loginButton = document.querySelector(".sign-up-form button");
const username = document.querySelector(".username");
const password = document.querySelector(".password");
const errorMessage = document.querySelector(".validation-message");
const register = document.querySelector(".register-message-btn");

let message = "";
loginButton.addEventListener("mouseover", () => {
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
});
const emptyInputs = () => {
  username.value = "";
  password.value = "";
  errorMessage.textContent = "";
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
register.addEventListener("click", () => {
  confirmPassword.classList.toggle("hide");
  confirmPasswordLabel.classList.toggle("hide");
});
