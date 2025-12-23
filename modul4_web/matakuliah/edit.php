<?php
include '../config.php';
include '../includes/header.php';

$id = $_GET['id'];
$q = mysqli_query($koneksi, "SELECT * FROM matakuliah WHERE ID_Matkul='$id'");
$data = mysqli_fetch_assoc($q);
?>

<h2>Edit Matakuliah</h2>

<form method="POST">
    <label>ID Matkul</label><br>
    <input type="text" value="<?= $data['ID_Matkul'] ?>" disabled><br><br>

    <label>Nama Matkul</label><br>
    <input type="text" name="Nama_Matkul" value="<?= $data['Nama_Matkul'] ?>" required><br><br>

    <button class="btn-primary" type="submit" name="submit">Update</button>
</form>

<?php
if (isset($_POST['submit'])) {
    $Nama = $_POST['Nama_Matkul'];

    mysqli_query($koneksi, "
        UPDATE matakuliah SET Nama_Matkul='$Nama'
        WHERE ID_Matkul='$id'
    ");

    header("Location: index.php");
}
?>
