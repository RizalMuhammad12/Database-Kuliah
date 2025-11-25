<?php
include '../config.php';

$ID_Dosen = $_GET['ID_Dosen'];
$delete = mysqli_query($koneksi, "DELETE FROM dosen WHERE ID_Dosen='$ID_Dosen'");

if ($delete) {
    header("Location: index_dosen.php");
} else {
    echo "Gagal menghapus data!";
}
?>
