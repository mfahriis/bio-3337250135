<?php
//tambahan agar cantik menggunakan css yang disambungkan ke php
echo "<link rel='stylesheet' href='style.css'>";
$daftar = [
    ["nama" => "Budi Santoso",  "nim" => "001", "ipk" => 3.85],
    ["nama" => "Ani Rahayu",    "nim" => "002", "ipk" => 3.72],
    ["nama" => "Citra Dewi",    "nim" => "003", "ipk" => 3.91],
    ["nama" => "Dodi Pratama",  "nim" => "004", "ipk" => 2.95],
    ["nama" => "Eka Wulandari", "nim" => "005", "ipk" => 3.55],
];
?>
<!DOCTYPE html>
<html>
    <header>
        <h1>Daftar Mahasiswa</h1>
    </header>
    <body>
        <section>
            <table border="1" cellpadding="8" style="width: 100%; border-collapse: collapse;border-color: black;">
                <tr>
                    <th>No</th><th>Nama</th><th>NIM</th>
                    <th>IPK</th><th>Status</th>
                </tr>
                <?php foreach ($daftar as $i => $mhs): ?>
                <tr>
                    <td><?= $i + 1 ?></td>
                    <td><?= $mhs['nama'] ?></td>
                    <td><?= $mhs['nim'] ?></td>
                    <td><?= $mhs['ipk'] ?></td>
                    <td><?= $mhs['ipk'] >= 3.75 ? 'Cumlaude 🌟' : 'Reguler' ?></td>
                </tr>
                <?php endforeach; ?>
            </table>
        </section>
    </body>
</html>