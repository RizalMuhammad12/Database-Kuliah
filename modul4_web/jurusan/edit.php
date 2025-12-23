<?php
include '../config.php';
include '../includes/header.php';

$id = $_GET['id'];
$q = mysqli_query($koneksi, "SELECT * FROM jurusan WHERE ID_Jurusan='$id'");
$data = mysqli_fetch_assoc($q);
?>

<div class="card">
<h2>Edit Jurusan</h2>

<form method="POST">
    <div class="form-row">
    <div class="form-group">
    <label>ID Jurusan</label><br>
    <input type="text" value="<?= $data['ID_Jurusan'] ?>" disabled><br><br>
</div>
    <div class="form-group">
    <label>Nama Jurusan</label><br>
    <input type="text" name="Nama_Jurusan" value="<?= $data['Nama_Jurusan'] ?>" required><br><br>
</div>
    <button class="btn-primary" type="submit" name="submit">Update</button>
</form>
</div>
</div>

<?php
if (isset($_POST['submit'])) {
    $nama = $_POST['Nama_Jurusan'];

    mysqli_query($koneksi, "
        UPDATE jurusan SET Nama_Jurusan='$nama'
        WHERE ID_Jurusan='$id'
    ");

    header("Location: index.php");
}
?>
