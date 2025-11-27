<?php
include '../config.php';
include '../includes/header.php';
$result = mysqli_query($koneksi, "SELECT * FROM jurusan");
?>

<h2>Data Jurusan</h2>
<a href="create.php" class="btn-primary">Tambah Jurusan</a>
<br><br>

<div class="card">
<table class="table">
    <thead>
    <tr>
        <th>ID Jurusan</th>
        <th>Nama Jurusan</th>
        <th>Aksi</th>
    </tr></thead>

    <?php while($row = mysqli_fetch_assoc($result)): ?>
    <tr>
        <td><?= $row['ID_Jurusan'] ?></td>
        <td><?= $row['Nama_Jurusan'] ?></td>
        <td class="actions">
            <a href="edit.php?id=<?= $row['ID_Jurusan'] ?>">Edit</a> |
            <a href="delete.php?id=<?= $row['ID_Jurusan'] ?>" onclick="return confirm('Hapus?')">Delete</a>
        </td>
    </tr>
    <?php endwhile; ?>
</table>
</div>
<?php include '../includes/footer.php'; ?>
