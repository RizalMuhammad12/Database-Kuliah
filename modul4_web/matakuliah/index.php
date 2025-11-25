<?php
include '../config.php';
$result = mysqli_query($koneksi, "SELECT * FROM matakuliah");
?>

<h2>Data Matakuliah</h2>
<a href="create.php">Tambah Matakuliah</a>
<br><br>

<table border="1" cellpadding="8">
    <tr>
        <th>ID Matkul</th>
        <th>Nama Matkul</th>
        <th>Aksi</th>
    </tr>

    <?php while($row = mysqli_fetch_assoc($result)): ?>
    <tr>
        <td><?= $row['ID_Matkul'] ?></td>
        <td><?= $row['Nama_Matkul'] ?></td>
        <td>
            <a href="edit.php?id=<?= $row['ID_Matkul'] ?>">Edit</a> |
            <a href="delete.php?id=<?= $row['ID_Matkul'] ?>" onclick="return confirm('Hapus?')">Delete</a>
        </td>
    </tr>
    <?php endwhile; ?>
</table>
