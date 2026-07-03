// Pilih tombol dan body
const btnToggle = document.querySelector("#btnToggle");
const body = document.body;

// Tambahkan event listener saat tombol diklik
btnToggle.addEventListener("click", () => {
  // Toggle class 'dark' pada <body>
  body.classList.toggle("dark");

  // Ganti teks tombol sesuai mode aktif
  if (body.classList.contains("dark")) {
    btnToggle.textContent = "☀️ Light Mode";
  } else {
    btnToggle.textContent = "🌙 Dark Mode";
  }
});

btnToggle.addEventListener("click", () => {
  body.classList.toggle("dark");
  const isDark = body.classList.contains("dark");
  localStorage.setItem("darkMode", isDark);
  btnToggle.textContent = isDark ? "☀️ Light Mode" : "🌙 Dark Mode";
});

// Baca preferensi saat halaman dimuat
if (localStorage.getItem("darkMode") === "true") {
  body.classList.add("dark");
  btnToggle.textContent = "☀️ Light Mode";
}

let hitungan = 0;

btnToggle.addEventListener("click", () => {
  body.classList.toggle("dark");
  hitungan++;
  console.log(`Mode diganti ${hitungan} kali`);
});