<?php
include '../config.php';

$id = $_GET['id'];
$conn->query("DELETE FROM prodi WHERE ID_Prodi='$id'");

header("Location: index.php");
?>
