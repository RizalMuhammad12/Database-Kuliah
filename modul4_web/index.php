<?php
// index.php
require 'config.php';
include 'includes/header.php';

// ambil beberapa count untuk ditampilkan
$counts = [];
$tables = ['mahasiswa','dosen','matakuliah','prodi'];
foreach($tables as $t){
    $res = $koneksi->query("SELECT COUNT(*) as c FROM `$t`");
    $row = $res->fetch_assoc();
    $counts[$t] = $row ? $row['c'] : 0;
}
?>
<div class="card">
  <h1 style="text-align:center">POLITEKNIK NEGERI BANJARMASIN</h1>
  <img src="Logo_poliban.jpg" alt="Logo Poliban" class="logo">
</div>

<div class="card dashboard-stats">
  <div class="stat red"><span class="iconify icon" data-icon="mdi:account-group"></span>
    <div><div style="font-size:20px"><?=$counts['mahasiswa']?></div><div>Jumlah Siswa</div></div>
  </div>
  <div class="stat blue"><span class="iconify icon" data-icon="mdi:teacher"></span>
    <div><div style="font-size:20px"><?=$counts['dosen']?></div><div>Jumlah Dosen</div></div>
  </div>
  <div class="stat green"><span class="iconify icon" data-icon="mdi:domain"></span>
    <div><div style="font-size:20px"><?=$counts['prodi']?></div><div>Jurusan</div></div>
  </div>
  <div class="stat yellow"><span class="iconify icon" data-icon="mdi:book-open"></span>
    <div><div style="font-size:20px"><?=$counts['matakuliah']?></div><div>Matakuliah</div></div>
  </div>
</div>

<?php include 'includes/footer.php'; ?>
