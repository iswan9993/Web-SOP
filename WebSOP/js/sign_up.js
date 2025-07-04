const passwordInput = document.getElementById("password");
const eyeClose = document.getElementById("eye-close");
const eyeOpen = document.getElementById("eye-open");
const inputs = document.querySelectorAll(".group-bar input");
const signupBtn = document.getElementById("signup-btn");
const emailInput = document.getElementById("email");
const emailError = document.getElementById("email-error");

function togglePassword() {
  // Cek apakah input kosong, jika kosong jangan lakukan apa-apa
  if (passwordInput.value.length === 0) return;

  if (passwordInput.type === "password") {
    passwordInput.type = "text";
    eyeClose.style.display = "none";
    eyeOpen.style.display = "inline";
  } else {
    passwordInput.type = "password";
    eyeClose.style.display = "inline";
    eyeOpen.style.display = "none";
  }
}

// Fungsi untuk mengaktifkan/menonaktifkan icon mata
function updateEyeIconState() {
  if (passwordInput.value.length === 0) {
    eyeClose.classList.add("disabled");
    eyeOpen.classList.add("disabled");
  } else {
    eyeClose.classList.remove("disabled");
    eyeOpen.classList.remove("disabled");
  }
}

// Jalankan fungsi setiap kali isi input berubah
passwordInput.addEventListener("input", updateEyeIconState);

// Jalankan sekali saat halaman dimuat
updateEyeIconState();

// Fungsi cek semua input
function checkInputs() {
  let allFilled = true;
  inputs.forEach((input) => {
    if (input.value.trim() === "") {
      allFilled = false;
    }
  });
  signupBtn.disabled = !allFilled;
}

// Event listener untuk semua input
inputs.forEach((input) => {
  input.addEventListener("input", checkInputs);
});

// Jalankan sekali saat halaman dimuat
checkInputs();

function validateEmail(email) {
  // Regex validasi email yang umum digunakan
  const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  return regex.test(email);
}

emailInput.addEventListener("input", function () {
  const emailVal = emailInput.value.trim();
  if (emailVal.length === 0) {
    emailError.style.display = "none";
  } else if (!validateEmail(emailVal)) {
    emailError.style.display = "inline";
    emailError.textContent = "Email tidak valid";
  } else {
    emailError.style.display = "none";
  }
});
