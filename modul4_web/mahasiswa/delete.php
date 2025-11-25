<?php
// mahasiswa/delete.php
require '../config.php';
if(!isset($_GET['nim'])) { header('Location: index.php'); exit; }
$nim = $mysqli->real_escape_string($_GET['nim']);
$mysqli->query("DELETE FROM mahasiswa WHERE NIM='$nim'");
header('Location: index.php');
exit;
