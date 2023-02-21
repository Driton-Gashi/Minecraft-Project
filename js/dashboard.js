const allImages = document.querySelectorAll(".user-image img");
let shouldBeDeleted = false;

allImages.forEach((image) => {
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
const editBtn = document.querySelectorAll(".edit");
const confirmBtn = document.querySelectorAll(".confirm");
const deleteBtn = document.querySelectorAll(".delete");
const cancelBtn = document.querySelectorAll(".cancel");

editBtn.forEach((button) => {
  button.addEventListener("click", (e) => {
    const buttonWrapper = e.target.closest(".button-wrapper");
    const newDelete = buttonWrapper.querySelector(".delete");
    const newConfirm = buttonWrapper.querySelector(".confirm");
    const newCancel = buttonWrapper.querySelector(".cancel");
    e.target.classList.add("hide");
    newDelete.classList.add("hide");
    newConfirm.classList.remove("hide");
    newCancel.classList.remove("hide");
    const row = e.target.closest(".row");
    const usernameInput = row.querySelector(".username");
    const passwordInput = row.querySelector(".password");
    const roleInput = row.querySelector(".role");
    usernameInput.classList.add("editing");
    usernameInput.removeAttribute("disabled");
    usernameInput.focus();
    passwordInput.classList.add("editing");
    passwordInput.removeAttribute("disabled");
    roleInput.classList.add("editing");
    roleInput.removeAttribute("disabled");
  });
});

cancelBtn.forEach((button) => {
  button.addEventListener("click", (e) => {
    const buttonWrapper = e.target.closest(".button-wrapper");
    const newEdit = buttonWrapper.querySelector(".edit");
    const newConfirm = buttonWrapper.querySelector(".confirm");
    const newDelete = buttonWrapper.querySelector(".delete");
    e.target.classList.add("hide");
    newDelete.classList.remove("hide");
    newConfirm.classList.add("hide");
    newEdit.classList.remove("hide");

    const row = e.target.closest(".row");
    const usernameInput = row.querySelector(".username");
    const passwordInput = row.querySelector(".password");
    const roleInput = row.querySelector(".role");
    usernameInput.classList.remove("editing");
    usernameInput.disabled = true;
    passwordInput.classList.remove("editing");
    passwordInput.disabled = true;
    roleInput.classList.remove("editing");
    roleInput.disabled = true;
  });
});

const deleteUser = (id) => {
  if (confirm("Are you sure you want to delete this user!")) {
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        console.log("xhttp request was successful");
      } else {
        console.log("xhttp request failed");
      }
    };
    xhttp.open("GET", `../php/deleteUser.php?id=${id}`, true);
    xhttp.send();
    shouldBeDeleted = true;
  } else {
    shouldBeDeleted = false;
  }
};

deleteBtn.forEach((button) => {
  button.addEventListener("click", (e) => {
    if (shouldBeDeleted) {
      e.target.closest(".row").classList.add("swipe-left");
      setTimeout(() => {
        e.target.closest(".row").classList.add("hide");
      }, 1000);
    }
  });
});
const searchBtn = document.querySelector(".search-btn");
const searchInput = document.querySelector(".user-input");
const cancelSearchBtn = document.querySelector(".search-cancel");

const filterUserTable = () => {
  if (searchInput.value.length == 0) {
  } else {
    searchBtn.classList.add("hide");
    cancelSearchBtn.classList.remove("hide");
    filter();
  }
};

const cancelSearch = () => {
  searchInput.value = "";
  searchBtn.classList.remove("hide");
  cancelSearchBtn.classList.add("hide");
  filter();
};

const filter = () => {
  let text = searchInput.value.toLowerCase();
  let rows = document.querySelectorAll(".row");

  Array.from(rows).forEach((row) => {
    let rowUsername = row.querySelector(".username").value;
    if (rowUsername.toLocaleLowerCase().indexOf(text) != -1) {
      row.classList.remove("hide");
      setTimeout(() => {
        row.classList.remove("swipe-left");
      }, 500);
    } else {
      row.classList.add("swipe-left");
      setTimeout(() => {
        row.classList.add("hide");
      }, 500);
    }
  });
};

// Register a user from admin dashboard

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

const registerForm = document.querySelector(".register");
const showRegisterForm = () => {
  registerForm.classList.remove("hideLeft");
};
