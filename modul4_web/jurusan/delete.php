<?php
include '../config.php';

$id = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM jurusan WHERE ID_Jurusan='$id'");

header("Location: index.php");
?>
