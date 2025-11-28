<?php
include '../config.php';
include '../includes/header.php';

$id = $_GET['id'];
$dataQuery = $conn->query("SELECT * FROM prodi WHERE ID_Prodi='$id'");
$jurusan = $conn->query("SELECT * FROM jurusan");

if (isset($_POST['submit'])) {
    $nama = $_POST['Nama_Prodi'];
    $jur = $_POST['ID_Jurusan'];
    $koor = $_POST['ID_Koorprodi'];

    $sql = "
        UPDATE prodi SET 
            Nama_Prodi='$nama',
            ID_Jurusan='$jur',
            ID_Koorprodi='$koor'
        WHERE ID_Prodi='$id'
    ";

    $conn->query($sql);
    header("Location: index.php");
}
?>

<h2>Edit Prodi</h2>

<form method="POST">
    <label>ID Prodi:</label>
    <input type="text" value="<?= $data['ID_Prodi'] ?>" disabled>

    <label>Nama Prodi:</label>
    <input type="text" name="Nama_Prodi" value="<?= $data['Nama_Prodi'] ?>" required>

    <label>Jurusan:</label>
    <select name="ID_Jurusan" required>
        <?php while ($j = $jurusan->fetch_assoc()) : ?>
            <option 
                value="<?= $j['ID_Jurusan'] ?>" 
                <?= $j['ID_Jurusan'] == $data['ID_Jurusan'] ? 'selected' : '' ?>>
                <?= $j['Nama_Jurusan'] ?>
            </option>
        <?php endwhile; ?>
    </select>

    <label>ID Koorprodi:</label>
    <input type="text" name="ID_Koorprodi" value="<?= $data['ID_Koorprodi'] ?>" required>

    <button type="submit" name="submit">Update</button>
</form>

<?php include '../includes/footer.php'; ?>
