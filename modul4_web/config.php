<?php
// config.php
$DB_HOST = '127.0.0.1';
$DB_USER = 'root';
$DB_PASS = ''; // isi password jika ada
$DB_NAME = 'web';

$koneksi = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
if ($koneksi->connect_errno) {
    die("Gagal koneksi MySQL: (" . $koneksi->connect_errno . ") " . $koneksi->connect_error);
}
$koneksi->set_charset("utf8mb4");
?>
