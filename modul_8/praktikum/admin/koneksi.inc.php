<?php
$host="localhost";
$username="root";
$password="";
$conn = mysqli_connect($host, $username, $password) or die("Koneksi gagal dibangun");
mysqli_select_db($conn, "latihandb") or die("Database tidak dapat dibuka"); 
?>

