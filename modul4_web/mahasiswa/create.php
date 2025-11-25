<?php
// mahasiswa/create.php
require '../config.php';
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $nim = $mysqli->real_escape_string($_POST['nim']);
    $nama = $mysqli->real_escape_string($_POST['nama']);
    $prodi = $mysqli->real_escape_string($_POST['prodi']);

    $stmt = $mysqli->prepare("INSERT INTO mahasiswa (NIM, Nama_Mahasiswa, ID_Prodi) VALUES (?, ?, ?)");
    $stmt->bind_param('sss',$nim,$nama,$prodi);
    if($stmt->execute()){
        header('Location: index.php');
        exit;
    } else {
        $error = $stmt->error;
    }
}
$prodiRes = $mysqli->query("SELECT ID_Prodi, Nama_Prodi FROM prodi");
include '../includes/header.php';
?>
<div class="card">
  <h2>Tambah Mahasiswa</h2>
  <?php if(!empty($error)) echo "<p style='color:red'>$error</p>"; ?>
  <form method="post">
    <div class="form-row">
      <div class="form-group">
        <label>NIM</label>
        <input type="text" name="nim" required>
      </div>
      <div class="form-group">
        <label>Nama</label>
        <input type="text" name="nama" required>
      </div>
      <div class="form-group">
        <label>Program Studi</label>
        <select name="prodi" required>
          <option value="">--Pilih--</option>
          <?php while($p = $prodiRes->fetch_assoc()): ?>
            <option value="<?=htmlspecialchars($p['ID_Prodi'])?>"><?=htmlspecialchars($p['Nama_Prodi'])?></option>
          <?php endwhile; ?>
        </select>
      </div>
    </div>
    <button class="btn-primary" type="submit">Simpan</button>
  </form>
</div>
<?php include '../includes/footer.php'; ?>
