<?php
include '../config.php';

$id = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM matakuliah WHERE ID_Matkul='$id'");

header("Location: index.php");
?>
