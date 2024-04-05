// Data storage (in a real-world scenario, this would be replaced with a database)
let users = [];

// Register form submission
document
  .getElementById("register-form")
  .addEventListener("submit", function (event) {
    event.preventDefault();
    const usernameInput = document.getElementById("reg-username");
    const passwordInput = document.getElementById("reg-password");
    const phoneInput = document.getElementById("reg-phone");
    const username = usernameInput.value;
    const password = passwordInput.value;
    const phone = phoneInput.value;

    // Check if username already exists
    if (users.some((user) => user.username === username)) {
      alert("Username already exists. Please choose a different one.");
      return;
    }

    // Store user data
    users.push({ username, password, phone });
    alert("Registration successful!");

    // Reset input fields
    usernameInput.value = "";
    passwordInput.value = "";
    phoneInput.value = "";
  });

// Login form submission
document
  .getElementById("login-form")
  .addEventListener("submit", function (event) {
    event.preventDefault();
    const usernameInput = document.getElementById("login-username");
    const passwordInput = document.getElementById("login-password");
    const username = usernameInput.value;
    const password = passwordInput.value;

    // Find user in the stored data
    const foundUser = users.find(
      (user) => user.username === username && user.password === password
    );

    if (foundUser) {
      // Simpan informasi login ke session storage
      sessionStorage.setItem("loggedInUser", JSON.stringify(foundUser));
      // Redirect ke halaman menu
      window.location.href = "../MusicPlaylist/pages/dashboard.php";
    } else {
      alert("Invalid username or password.");
    }

    // Reset input fields
    usernameInput.value = "";
    passwordInput.value = "";
  });

document.addEventListener("DOMContentLoaded", function () {
  const loginForm = document.getElementById("login-form");
  const registerForm = document.getElementById("register-form");
  const registerFormCon = document.getElementById("register-container");

  const loginButton = document.getElementById("login-button");
  const registerButton = document.getElementById("register-button");
  const loginFormCon = document.getElementById("login-container");

  loginButton.addEventListener("click", function () {
    loginForm.style.display = "block";
    registerForm.style.display = "none";
    loginButton.style.display = "none";
    registerButton.style.display = "inline-block";
    registerFormCon.style.display = "none";
    loginFormCon.style.display = "block"; // Menyembunyikan container form registrasi
  });

  registerButton.addEventListener("click", function () {
    loginForm.style.display = "none";
    registerForm.style.display = "block";
    loginButton.style.display = "inline-block";
    registerButton.style.display = "none";
    registerFormCon.style.display = "block";
    loginFormCon.style.display = "none"; // Menampilkan container form registrasi
  });

  // Sembunyikan form registrasi saat halaman dimuat
  registerFormCon.style.display = "none";
});
