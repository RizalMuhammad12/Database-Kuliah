<?php
// mahasiswa/index.php
require '../config.php';
include '../includes/header.php';

$res = $koneksi->query("SELECT m.NIM, m.Nama_Mahasiswa, m.ID_Prodi, p.Nama_Prodi 
    FROM mahasiswa m LEFT JOIN prodi p ON m.ID_Prodi = p.ID_Prodi
    ORDER BY m.NIM ASC");
?>
<div class="card">
  <h2>Daftar Mahasiswa <a href="create.php" class="btn-primary" style="float:right">Tambah</a></h2>
  <table class="table">
    <thead><tr><th>NIM</th><th>Nama</th><th>Program</th><th>Aksi</th></tr></thead>
    <tbody>
    <?php while($r = $res->fetch_assoc()): ?>
      <tr>
        <td><?=htmlspecialchars($r['NIM'])?></td>
        <td><?=htmlspecialchars($r['Nama_Mahasiswa'])?></td>
        <td><?=htmlspecialchars($r['Nama_Prodi']?:$r['ID_Prodi'])?></td>
        <td class="actions">
          <a href="edit.php?nim=<?=urlencode($r['NIM'])?>">Edit</a>
          <a href="delete.php?nim=<?=urlencode($r['NIM'])?>" onclick="return confirm('Hapus mahasiswa ini?')">Hapus</a>
        </td>
      </tr>
    <?php endwhile; ?>
    </tbody>
  </table>
</div>
<?php include '../includes/footer.php'; ?>
