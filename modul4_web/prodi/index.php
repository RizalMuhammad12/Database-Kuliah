<?php
include '../config.php';
include '../includes/header.php';
$result = mysqli_query($koneksi, "SELECT * FROM prodi");
?>

<h2>Data Prodi</h2>
<a href="create.php" class="btn-primary">Tambah Prodi</a>
<br><br>

<div class="card">
<table class="table">
    <thead>
    <tr>
        <th>ID Prodi</th>
        <th>Nama Prodi</th>
        <th>ID Jurusan</th>
        <th>ID Koorprodi</th>
        <th>Aksi</th>
    </tr></thead>

    <?php while($row = mysqli_fetch_assoc($result)): ?>
    <tr>
        <td><?= $row['ID_Prodi'] ?></td>
        <td><?= $row['Nama_Prodi'] ?></td>
        <td><?= $row['ID_Jurusan'] ?></td>
        <td><?= $row['ID_Koorprodi'] ?></td>
        <td class="actions">
            <a href="edit.php?id=<?= $row['ID_Prodi'] ?>">Edit</a> |
            <a href="delete.php?id=<?= $row['ID_Prodi'] ?>" onclick="return confirm('Hapus?')">Delete</a>
        </td>
    </tr>
    <?php endwhile; ?>
</table>
</div>
<?php include '../includes/footer.php'; ?>
