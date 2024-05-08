<?php
$conn = mysqli_connect('localhost', 'root', '') or die ('Koneksi gagal.');
mysqli_select_db($conn, 'latihandb');

$sql = "CREATE TABLE IF NOT EXISTS kontak (
    id INT(4) AUTO_INCREMENT PRIMARY KEY NOT NULL,
    nama VARCHAR(30) NOT NULL,
    jkel VARCHAR(10), 
    email VARCHAR(40),
    alamat VARCHAR(50),
    kota VARCHAR(20),
    pesan TEXT
)";

if (mysqli_query($conn, $sql)) {
    echo "Tabel berhasil dibuat";
} else {
    echo "Gagal membuat tabel: " . mysqli_error($conn);
}
?>