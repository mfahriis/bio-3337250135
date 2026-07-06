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

// Agar mode gelap tetap tersimpan saat halaman di-refresh
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

// Tampilkan berapa kali pengguna mengklik tombol toggle
let hitungan = 0;

btnToggle.addEventListener("click", () => {
  body.classList.toggle("dark");
  hitungan++;
  console.log(`Mode diganti ${hitungan} kali`);
});

// ===== FETCH API: FAKTA KUCING =====

const isiFakta   = document.querySelector("#isi-fakta");
const btnRefresh = document.querySelector("#btnRefresh");

async function ambilFakta() {
  // Tampilkan loading indicator
  isiFakta.textContent = "⏳ Memuat fakta...";

  try {
    const response = await fetch("https://catfact.ninja/fact");

    // Cek apakah HTTP response OK (status 200-299)
    if (!response.ok) {
      throw new Error("HTTP Error: " + response.status);
    }

    const data = await response.json();

    // Tampilkan fakta ke DOM
    isiFakta.textContent = data.fact;

  } catch (error) {
    // Tampilkan pesan error yang ramah
    isiFakta.textContent = "⚠️ Gagal memuat fakta. Cek koneksi internet Anda.";
    console.error("Error:", error.message);
  }
}

// Jalankan saat halaman pertama kali dimuat
ambilFakta();

// Jalankan ulang saat tombol diklik
btnRefresh.addEventListener("click", ambilFakta);

// Kumpulkan beberapa fakta dalam array
const koleksiFakta = [];

async function ambilDanSimpan() {
  const response = await fetch("https://catfact.ninja/fact");
  const data = await response.json();
  koleksiFakta.push(data.fact);

  // Render semua fakta yang sudah terkumpul ke dalam <ul>
  const ul = document.querySelector("#daftar-fakta");
  ul.innerHTML = koleksiFakta
    .map(fakta => `<li>${fakta}</li>`)
    .join("");
}

// Perintah di bawah modul: panggil ambilDanSimpan() beberapa kali
ambilDanSimpan();
ambilDanSimpan();
ambilDanSimpan();