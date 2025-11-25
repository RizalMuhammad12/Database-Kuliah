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
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <header class="topbar">
    <nav class="nav">
      <a class="nav-brand" href="">Politeknik Negeri Banjarmasin</a>
      <div class="nav-links">
      <a href="index.php" class="btn <?= $current == 'index.php' ? 'active' : '' ?>">Beranda</a>
<a href="Database/index.php" class="btn <?= strpos($_SERVER['REQUEST_URI'], 'database') !== false ? 'active' : '' ?>">Database</a>
<a href="#" class="btn">Info</a>

      </div>
    </nav>
  </header>
  <main class="container">
