<?php
include '../config.php';
include '../includes/header.php';
$query = mysqli_query($koneksi, "SELECT * FROM dosen");
?>

<h2>Data Dosen</h2>
<a href="create.php" class="btn-primary">Tambah Dosen</a>
<br><br>

<div class="card">
<table class="table">
    <thead>
    <tr>
        <th>ID Dosen</th>
        <th>Nama Dosen</th>
        <th>ID Prodi</th>
        <th>Beban Ajar</th>
        <th>Aksi</th>
    </tr></thead>

    <?php while($row = mysqli_fetch_assoc($query)): ?>
    <tr>
        <td><?= $row['ID_Dosen'] ?></td>
        <td><?= $row['Nama_Dosen'] ?></td>
        <td><?= $row['ID_Prodi'] ?></td>
        <td><?= $row['Beban_Ajar'] ?></td>
        <td class="actions">
            <a href="edit.php?ID_Dosen=<?= $row['ID_Dosen'] ?>">Edit</a> |
            <a href="delete.php?ID_Dosen=<?= $row['ID_Dosen'] ?>" onclick="return confirm('Yakin hapus data?')">Delete</a>
        </td>
    </tr>
    <?php endwhile; ?>

</table>
</div>
<?php include '../includes/footer.php'; ?>
