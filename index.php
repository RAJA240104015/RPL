<?php
$namaAplikasi = 'Sistem Inventaris Laboratorium';
$waktu = date('d-m-Y H:i:s');
?>
<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($namaAplikasi) ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main class="hero">
        <div class="glass-box">
            <div class="badge">REKAYASA PERANGKAT LUNAK</div>
            <h1 class="animated-title"><?= htmlspecialchars($namaAplikasi) ?></h1>
            <p class="subtitle">Aplikasi praktikum Rekayasa Perangkat Lunak</p>
            <div class="info-box">
                <span class="info-label">Waktu Server</span>
                <span class="server-time"><?= htmlspecialchars($waktu) ?></span>
            </div>
            <div class="decorative-line"></div>
            <p class="description">Kelola inventaris laboratorium dengan tampilan sederhana, modern, dan responsif.</p>
        </div>
    </main>
</body>
</html>
