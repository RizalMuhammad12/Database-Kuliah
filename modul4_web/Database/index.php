<?php
$current = 'database'; 
$base_path = '../'; // Perlu naik satu folder untuk menuju root
require '../config.php';
include '../includes/header.php';
?>
<head><link rel="stylesheet" href="../css/style.css"></head>
<div class="card">
    <h2>Pilih Tabel Database</h2>

    <div class="db-menu">
        <a href="../mahasiswa/index.php" class="db-item">
            <span class="iconify" data-icon="mdi:account-group"></span>
            <p>Mahasiswa</p>
        </a>

        <a href="../dosen/index_dosen.php" class="db-item">
            <span class="iconify" data-icon="mdi:teacher"></span>
            <p>Dosen</p>
        </a>

        <a href="../jurusan/index.php" class="db-item">
            <span class="iconify" data-icon="mdi:domain"></span>
            <p>Jurusan</p>
        </a>

        <a href="../prodi/index.php" class="db-item">
            <span class="iconify" data-icon="mdi:school"></span>
            <p>Program Studi</p>
        </a>

        <a href="../matakuliah/index.php" class="db-item">
            <span class="iconify" data-icon="mdi:book-open-page-variant"></span>
            <p>Matakuliah</p>
        </a>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
