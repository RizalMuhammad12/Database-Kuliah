<?php include '../config.php'; ?>

<h2>Tambah Jurusan</h2>

<form method="POST">
    <label>ID Jurusan</label><br>
    <input type="text" name="ID_Jurusan" required><br><br>

    <label>Nama Jurusan</label><br>
    <input type="text" name="Nama_Jurusan" required><br><br>

    <button type="submit" name="submit">Simpan</button>
</form>

<?php
if (isset($_POST['submit'])) {
    $id = $_POST['ID_Jurusan'];
    $nama = $_POST['Nama_Jurusan'];

    mysqli_query($koneksi, "INSERT INTO jurusan VALUES('$id', '$nama')");
    header("Location: index.php");
}
?>
