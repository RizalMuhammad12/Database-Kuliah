<?php
include '../config.php';
include '../includes/header.php';

$jurusan = $conn->query("SELECT * FROM jurusan");

if (isset($_POST['submit'])) {
    $id = $_POST['ID_Prodi'];
    $nama = $_POST['Nama_Prodi'];
    $jur = $_POST['ID_Jurusan'];
    $koor = $_POST['ID_Koorprodi'];

    $sql = "INSERT INTO prodi VALUES ('$id', '$nama', '$jur', '$koor')";
    $conn->query($sql);

    header("Location: index.php");
}
?>

<h2>Tambah Prodi</h2>

<form method="POST">
    <label>ID Prodi:</label>
    <input type="text" name="ID_Prodi" required>

    <label>Nama Prodi:</label>
    <input type="text" name="Nama_Prodi" required>

    <label>Jurusan:</label>
    <select name="ID_Jurusan" required>
        <option value="">- Pilih Jurusan -</option>
        <?php while ($j = $jurusan->fetch_assoc()) : ?>
            <option value="<?= $j['ID_Jurusan'] ?>"><?= $j['Nama_Jurusan'] ?></option>
        <?php endwhile; ?>
    </select>

    <label>ID Koorprodi:</label>
    <input type="text" name="ID_Koorprodi" required>

    <button type="submit" name="submit">Simpan</button>
</form>

<?php include '../includes/footer.php'; ?>
