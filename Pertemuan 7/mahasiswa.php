<?php
// Hubungkan ke file CSS eksternal Anda
echo "<link rel='stylesheet' href='style.css'>";

// Array asosiatif
$mahasiswa = [
    "nama"  => "Budi Santoso",
    "nim"   => "3411221001",
    "prodi" => "Informatika",
    "ipk"   => 3.85,
    "skill" => ["HTML", "CSS", "JavaScript", "PHP"],
];

// Profil utama menggunakan tag <header>
echo "<header>";
echo "<h1>" . $mahasiswa["nama"] . "</h1>";
echo "<p>IPK: " . $mahasiswa["ipk"] . " | Prodi: " . $mahasiswa["prodi"] . "</p>";
echo "</header>";

echo "<br><br>";

// Array of arrays (daftar banyak mahasiswa)
echo "<section>";
$daftar = [
    ["nama" => "Budi",  "ipk" => 3.85],
    ["nama" => "Ani",   "ipk" => 3.72],
    ["nama" => "Citra", "ipk" => 3.91],
];

echo "<h3>Daftar Banyak Mahasiswa</h3>";

// Menampilkan daftar mahasiswa sebagai paragraf biasa
foreach ($daftar as $mhs) {
    echo "<p>{$mhs['nama']} — IPK: {$mhs['ipk']}</p>";
}
echo "</section>";
?>
