// Fungsi untuk toggle visibility password
function togglePasswordVisibility(inputId, iconId) {
  var passwordField = document.getElementById(inputId);  // Ambil elemen input berdasarkan ID
  var eyeIcon = document.getElementById(iconId);  // Ambil elemen ikon berdasarkan ID

  // Toggle password visibility
  if (passwordField.type === "password") {
    passwordField.type = "text";  // Mengubah tipe input ke 'text' untuk menampilkan password
    eyeIcon.src = "/icons/eye_slash.svg";  // Ganti dengan ikon mata tertutup
  } else {
    passwordField.type = "password";  // Kembali ke tipe input 'password' untuk menyembunyikan password
    eyeIcon.src = "/icons/eye.svg";  // Ganti dengan ikon mata terbuka
  }
}
