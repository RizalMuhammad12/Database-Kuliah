<?php
// mahasiswa/delete.php
require '../config.php';
if(!isset($_GET['nim'])) { header('Location: index.php'); exit; }
$nim = $koneksi->real_escape_string($_GET['nim']);
$koneksi->query("DELETE FROM mahasiswa WHERE NIM='$nim'");
header('Location: index.php');
exit;
