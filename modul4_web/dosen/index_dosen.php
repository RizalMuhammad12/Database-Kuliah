<?php
include '../config.php';
$query = mysqli_query($koneksi, "SELECT * FROM dosen");
?>

<h2>Data Dosen</h2>
<a href="create.php">Tambah Dosen</a>
<br><br>

<table border="1" cellpadding="8">
    <tr>
        <th>ID Dosen</th>
        <th>Nama Dosen</th>
        <th>ID Prodi</th>
        <th>Beban Ajar</th>
        <th>Aksi</th>
    </tr>

    <?php while($row = mysqli_fetch_assoc($query)): ?>
    <tr>
        <td><?= $row['ID_Dosen'] ?></td>
        <td><?= $row['Nama_Dosen'] ?></td>
        <td><?= $row['ID_Prodi'] ?></td>
        <td><?= $row['Beban_Ajar'] ?></td>
        <td>
            <a href="edit.php?ID_Dosen=<?= $row['ID_Dosen'] ?>">Edit</a> |
            <a href="delete.php?ID_Dosen=<?= $row['ID_Dosen'] ?>" onclick="return confirm('Yakin hapus data?')">Delete</a>
        </td>
    </tr>
    <?php endwhile; ?>

</table>
