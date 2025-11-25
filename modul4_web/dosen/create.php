<?php include '../config.php'; ?>

<h2>Tambah Data Dosen</h2>
<form action="" method="POST">
    <label>ID Dosen</label><br>
    <input type="text" name="ID_Dosen" required><br><br>

    <label>Nama Dosen</label><br>
    <input type="text" name="Nama_Dosen" required><br><br>

    <label>ID Prodi</label><br>
    <input type="text" name="ID_Prodi" required><br><br>

    <label>Beban Ajar</label><br>
    <input type="number" name="Beban_Ajar" required><br><br>

    <button type="submit" name="submit">Simpan</button>
</form>

<?php
if (isset($_POST['submit'])) {
    $ID_Dosen = $_POST['ID_Dosen'];
    $Nama_Dosen = $_POST['Nama_Dosen'];
    $ID_Prodi = $_POST['ID_Prodi'];
    $Beban_Ajar = $_POST['Beban_Ajar'];

    $insert = mysqli_query($koneksi, "INSERT INTO dosen VALUES(
        '$ID_Dosen', '$Nama_Dosen', '$ID_Prodi', '$Beban_Ajar'
    )");

    if ($insert) {
        header("Location: index_dosen.php");
    } else {
        echo "Gagal menambah data!";
    }
}
?>
