<?php
include 'db_connect.php';

mysqli_select_db($conn, 'latihandb');
// Buat tabel buku tamu jika belum ada
$sql = "CREATE TABLE IF NOT EXISTS buku_tamu (
    id_bt INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(200) NOT NULL,
    email VARCHAR(50) NOT NULL,
    isi TEXT NOT NULL
)";

if (mysqli_query($conn, $sql)) {
    echo "Tabel buku tamu berhasil dibuat";
} else {
    echo "Gagal membuat tabel buku tamu: " . mysqli_error($conn);
}
?>
