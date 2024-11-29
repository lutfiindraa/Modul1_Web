function validateForm() {
  // Mendapatkan nilai input dari form
  var name = document.getElementById("name").value;
  var email = document.getElementById("email").value;
  var address = document.getElementById("address").value;

  // Memeriksa apakah ada input yang kosong
  if (name == "" || email == "" || address == "") {
    alert("Semua field harus diisi!");
    return false; // Menghentikan form submission jika ada field kosong
  }

  // Jika semua field terisi
  alert("Pendaftaran berhasil!");
  return true;
}
