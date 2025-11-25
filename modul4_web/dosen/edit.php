<?php
include '../config.php';

$ID_Dosen = $_GET['ID_Dosen'];
$data = mysqli_query($koneksi, "SELECT * FROM dosen WHERE ID_Dosen='$ID_Dosen'");
$row = mysqli_fetch_assoc($data);
?>

<h2>Edit Data Dosen</h2>

<form action="" method="POST">
    <label>ID Dosen</label><br>
    <input type="text" value="<?= $row['ID_Dosen'] ?>" disabled><br><br>

    <label>Nama Dosen</label><br>
    <input type="text" name="Nama_Dosen" value="<?= $row['Nama_Dosen'] ?>" required><br><br>

    <label>ID Prodi</label><br>
    <input type="text" name="ID_Prodi" value="<?= $row['ID_Prodi'] ?>" required><br><br>

    <label>Beban Ajar</label><br>
    <input type="number" name="Beban_Ajar" value="<?= $row['Beban_Ajar'] ?>" required><br><br>

    <button type="submit" name="submit">Update</button>
</form>

<?php
if (isset($_POST['submit'])) {
    $Nama_Dosen = $_POST['Nama_Dosen'];
    $ID_Prodi = $_POST['ID_Prodi'];
    $Beban_Ajar = $_POST['Beban_Ajar'];

    $update = mysqli_query($koneksi, "UPDATE dosen SET 
        Nama_Dosen='$Nama_Dosen',
        ID_Prodi='$ID_Prodi',
        Beban_Ajar='$Beban_Ajar'
        WHERE ID_Dosen='$ID_Dosen'
    ");

    if ($update) {
        header("Location: index_dosen.php");
    } else {
        echo "Gagal mengedit data!";
    }
}
?>
