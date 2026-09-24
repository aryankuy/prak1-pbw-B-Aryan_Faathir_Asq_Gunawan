<?php

// biodata.php
function statusKelulusan(float $ipk): string
{
    if ($ipk == 4.00) return 'Summa Cumlaude'; // Jika IPK sama dengan 4 maka Output mengeluarkan Summa Cumlaude
    if ($ipk >= 3.80) return 'Magna Cumlaude'; // Jika IPK sama atau lebih dari 3.80  maka Output mengeluarkan Magna Cumlaude
    if ($ipk >= 3.51) return 'Cumlaude';// Jika IPK sama atau lebih dari 3.51  maka Output mengeluarkan Cumlaude
    
    if ($ipk > 4.00) return 'IPK Tidak Valid'; // Jika IPK lebih dari 4 maka tidak valid
    return 'Perlu Peningkatan'; //selain deklarasi fungsi di atas maka output nya adalah 'Perlu Peningkatan'
}

$mahasiswa = [
    'npm' => '4524210016',
    'nama' => 'Aryan Faathir Asq Gunawan',
    'prodi' => 'Teknik Informatika',
    'semester' => 5,
    'ipk' => 3.99
];

?>

<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <title>Biodata</title>
</head>

<body>
    <h1>Data Mahasiswa</h1>
    <ul>
        <?php foreach ($mahasiswa as $kunci => $nilai): ?>
            <li><?= ucfirst($kunci) ?>: <?= htmlspecialchars((string)$nilai) ?></li>
        <?php endforeach; ?>
    </ul>
    <p>Predikat: <?= statusKelulusan($mahasiswa['ipk']) ?></p>
</body>

</html>