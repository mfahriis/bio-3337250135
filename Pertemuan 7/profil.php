<?php
echo "<link rel='stylesheet' href='style.css'>";
// === DATA MAHASISWA ===
$mahasiswa = [
    "nama"    => "Muhamad Fahri Indra Saputra",
    "nim"     => "3337250135",
    "prodi"   => "Informatika",
    "angkatan"=> 2025,
    "ipk"     => 3.87,
    "email"   => "mfahriis081207@gmail.com",
    "github"  => "https://github.com/mfahriis",
    "skill"   => ["HTML", "CSS", "JavaScript", "PHP", "Git"],
    "bio"     => "Saya adalah mahasiswa Informatika UNTIRTA yang
                  bersemangat belajar teknologi web dan suka mencari pengetahuan.",
];

// === FUNGSI HELPER ===
function badgeStatus(float $ipk) {
    if ($ipk >= 3.75) return "Cumlaude 🌟";
    if ($ipk >= 3.00) return "Sangat Memuaskan";
    return "Memuaskan";
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil - <?= $mahasiswa['nama'] ?></title>
</head>
<body>

<header>
    <h1><?= $mahasiswa['nama'] ?></h1>
    <p><?= $mahasiswa['prodi'] ?> • Angkatan <?= $mahasiswa['angkatan'] ?></p>
    <span class="badge"><?= badgeStatus($mahasiswa['ipk']) ?></span>
</header>

<section>
    <h2>Tentang Saya</h2>
    <p><?= $mahasiswa['bio'] ?></p>
    <p><strong>NIM:</strong> <?= $mahasiswa['nim'] ?></p>
    <p><strong>IPK:</strong> <?= $mahasiswa['ipk'] ?></p>
    <p><strong>Email:</strong> <?= $mahasiswa['email'] ?></p>
</section>

<section>
    <h2>Skill</h2>
    <?php foreach ($mahasiswa['skill'] as $skill): ?>
        <span class="skill-tag"><?= $skill ?></span>
    <?php endforeach; ?>
</section>

<section>
    <h2>Kondisional Berdasarkan IPK</h2>
    <?php if ($mahasiswa['ipk'] >= 3.75): ?>
        <p style="color:green;"><strong>Selamat! Anda meraih predikat Cumlaude.</strong></p>
    <?php elseif ($mahasiswa['ipk'] >= 3.0): ?>
        <p>Anda lulus dengan predikat Sangat Memuaskan.</p>
    <?php else: ?>
        <p>Anda lulus dengan predikat Memuaskan.</p>
    <?php endif; ?>
</section>

</body>
</html>