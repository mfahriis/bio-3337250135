<?php
echo "<link rel='stylesheet' href='style.css'>";
// Variabel
$nama   = "Budi Santoso";
$nim    = "3411221001";
$ipk    = 3.85;
$aktif  = true;
$skill  = ["HTML", "CSS", "JavaScript", "PHP"];

// Output ke browser
echo "<header>";
echo "<h1>Halo, {$nama}!</h1>";
echo "</header>";
echo "<section>";
echo "<p>NIM: {$nim}</p>";
echo "<p>IPK: {$ipk}</p>";

// Kondisional
if ($ipk >= 3.75) {
    echo "<p><strong>Status: Cumlaude 🌟</strong></p>";
} elseif ($ipk >= 3.0) {
    echo "<p>Status: Sangat Memuaskan</p>";
} else {
    echo "<p>Status: Memuaskan</p>";
}

// Foreach
echo "<ul>";
foreach ($skill as $item) {
    echo "<li>{$item}</li>";
}
echo "</ul>";
echo "</section>"
?>