<?php include '../config.php'; ?>

<h2>Tambah Matakuliah</h2>

<form method="POST">
    <label>ID Matkul</label><br>
    <input type="text" name="ID_Matkul" required><br><br>

    <label>Nama Matkul</label><br>
    <input type="text" name="Nama_Matkul" required><br><br>

    <button type="submit" name="submit">Simpan</button>
</form>

<?php
if (isset($_POST['submit'])) {
    $ID = $_POST['ID_Matkul'];
    $Nama = $_POST['Nama_Matkul'];

    mysqli_query($koneksi, "INSERT INTO matakuliah VALUES('$ID', '$Nama')");
    header("Location: index.php");
}
?>
