<?php
include '../config.php';
include '../includes/header.php';

if (!isset($_GET['id'])) {
    die("ID tidak ditemukan");
}

$id = $_GET['id'];

$dataQuery = $koneksi->query("SELECT * FROM prodi WHERE ID_Prodi='$id'");
$jurusan = $koneksi->query("SELECT * FROM jurusan");

// Kalau query gagal / data kosong
if (!$dataQuery || $dataQuery->num_rows == 0) {
    die("Data Prodi tidak ditemukan");
}

// FETCH DATA
$data = $dataQuery->fetch_assoc();

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

    $koneksi->query($sql);
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
