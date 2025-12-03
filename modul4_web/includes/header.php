<?php
// includes/header.php    \
$current = basename($_SERVER['PHP_SELF']); 
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Admin Database - Politeknik</title>
  <!-- Ubuntu font -->
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">
  <!-- Iconify -->
  <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
  <link rel="stylesheet" href="../css/style.css">
</head>
<body>
  <header class="topbar">
  <nav class="nav">

      <!-- Tombol kembali di dalam navbar -->
      <button class="btn-back-nav" onclick="history.back()">← Kembali</button>

      <a class="nav-brand" href="<?= $base_path ?>index.php">Politeknik Negeri Banjarmasin</a>

      <div class="nav-links">
          <a href="<?= $base_path ?>index.php" class="btn <?= $current == 'index' ? 'active' : '' ?>">Beranda</a>
          <a href="<?= $base_path ?>Database/index.php" class="btn <?= $current == 'database' ? 'active' : '' ?>">Database</a>
      </div>

  </nav>
</header>

<main class="container">

<style>
.btn-back-nav {
    background: rgba(255, 255, 255, 0.2);
    color: #fff;
    border: 1px solid rgba(255, 255, 255, 0.4);
    padding: 6px 14px;
    border-radius: 6px;
    margin-right: 15px;
    cursor: pointer;
    font-size: 14px;
    transition: 0.2s;
}

.btn-back-nav:hover {
    background: rgba(255, 255, 255, 0.35);
}

</style>
<main class="container">

