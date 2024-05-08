<?php
$conn = mysqli_connect('localhost', 'root', '') or die ('Koneksi gagal.');
mysqli_select_db($conn, 'latihandb');

$sql = "CREATE TABLE IF NOT EXISTS userdata (
    email VARCHAR(100) PRIMARY KEY NOT NULL,
    password VARCHAR(24) NOT NULL
)";

if (mysqli_query($conn, $sql)) {
    echo "Tabel berhasil dibuat";
} else {
    echo "Gagal membuat tabel: " . mysqli_error($conn);
}
?>