<?php
include '../config.php';
include '../includes/header.php';
$result = mysqli_query($koneksi, "SELECT * FROM matakuliah");
?>
<h2>Data Matakuliah</h2>
<a href="create.php" class="btn-primary">Tambah Matakuliah</a>
<br><br>
<div class="card">
<table class="table">
    <thead>
    <tr>
        <th>ID Matkul</th>
        <th>Nama Matkul</th>
        <th>Aksi</th>
    </tr></thead>

    <?php while($row = mysqli_fetch_assoc($result)): ?>
    <tr>
        <td><?= $row['ID_Matkul'] ?></td>
        <td><?= $row['Nama_Matkul'] ?></td>
        <td class="actions">
            <a href="edit.php?id=<?= $row['ID_Matkul'] ?>">Edit</a> |
            <a href="delete.php?id=<?= $row['ID_Matkul'] ?>" onclick="return confirm('Hapus?')">Delete</a>
        </td>
    </tr>
    <?php endwhile; ?>
</table>
</div>
<?php include '../includes/footer.php'; ?>
