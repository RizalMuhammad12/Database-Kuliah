<?php
// index.php
$current = 'index'; 
$base_path = ''; // Tidak perlu naik folder
require 'config.php';
include 'includes/header.php';

// ambil beberapa count untuk ditampilkan
$counts = [];
$tables = ['mahasiswa','dosen','matakuliah','prodi','jurusan'];
foreach($tables as $t){
    $res = $koneksi->query("SELECT COUNT(*) as c FROM `$t`");
    $row = $res->fetch_assoc();
    $counts[$t] = $row ? $row['c'] : 0;
}
?>
<head><link rel="stylesheet" href="css/style.css"></head>
<script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>

<div class="card">
  <h1 style="text-align:center">POLITEKNIK NEGERI BANJARMASIN</h1>
  <img src="Logo_poliban.jpg" alt="Logo Poliban" class="logo">
</div>

<div class="dashboard-stats">

  <div class="stat red">
    <span class="iconify icon" data-icon="mdi:account-group"></span>
    <div>
      <div style="font-size:20px"><?=$counts['mahasiswa']?></div>
      <div>Jumlah Siswa</div>
    </div>
  </div>

  <div class="stat yellow">
    <span class="iconify icon" data-icon="mdi:domain"></span>
    <div>
      <div style="font-size:20px"><?=$counts['jurusan']?></div>
      <div>Jurusan</div>
    </div>
  </div> <!-- DIV YANG PENTING!!! -->

  <div class="stat blue">
    <span class="iconify icon" data-icon="mdi:teacher"></span>
    <div>
      <div style="font-size:20px"><?=$counts['dosen']?></div>
      <div>Jumlah Dosen</div>
    </div>
  </div>

  <div class="stat green">
    <span class="iconify icon" data-icon="mdi:domain"></span>
    <div>
      <div style="font-size:20px"><?=$counts['prodi']?></div>
      <div>Prodi</div>
    </div>
  </div>

  <div class="stat yellow">
    <span class="iconify icon" data-icon="mdi:book-open"></span>
    <div>
      <div style="font-size:20px"><?=$counts['matakuliah']?></div>
      <div>Matakuliah</div>
    </div>
  </div>

</div>


<?php include 'includes/footer.php'; ?>
