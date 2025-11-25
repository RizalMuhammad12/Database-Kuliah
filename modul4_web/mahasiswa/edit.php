<?php
// mahasiswa/edit.php
require '../config.php';
if(!isset($_GET['nim'])) { header('Location: index.php'); exit; }
$nim = $koneksi->real_escape_string($_GET['nim']);
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $nama = $koneksi->real_escape_string($_POST['nama']);
    $prodi = $koneksi->real_escape_string($_POST['prodi']);
    $stmt = $koneksi->prepare("UPDATE mahasiswa SET Nama_Mahasiswa=?, ID_Prodi=? WHERE NIM=?");
    $stmt->bind_param('sss',$nama,$prodi,$nim);
    if($stmt->execute()){
        header('Location: index.php'); exit;
    } else {
        $error = $stmt->error;
    }
}

$res =$koneksi->query("SELECT * FROM mahasiswa WHERE NIM='$nim'");
$data = $res->fetch_assoc();
$prodiRes = $koneksi->query("SELECT ID_Prodi, Nama_Prodi FROM prodi");
include '../includes/header.php';
?>
<div class="card">
  <h2>Edit Mahasiswa</h2>
  <?php if(!empty($error)) echo "<p style='color:red'>$error</p>"; ?>
  <form method="post">
    <div class="form-row">
      <div class="form-group">
        <label>NIM</label>
        <input type="text" value="<?=htmlspecialchars($data['NIM'])?>" disabled>
      </div>
      <div class="form-group">
        <label>Nama</label>
        <input type="text" name="nama" value="<?=htmlspecialchars($data['Nama_Mahasiswa'])?>" required>
      </div>
      <div class="form-group">
        <label>Program Studi</label>
        <select name="prodi" required>
          <?php while($p = $prodiRes->fetch_assoc()): ?>
            <option value="<?=htmlspecialchars($p['ID_Prodi'])?>" <?=($p['ID_Prodi']==$data['ID_Prodi'])?'selected':''?> >
              <?=htmlspecialchars($p['Nama_Prodi'])?>
            </option>
          <?php endwhile; ?>
        </select>
      </div>
    </div>
    <button class="btn-primary" type="submit">Update</button>
  </form>
</div>
<?php include '../includes/footer.php'; ?>
