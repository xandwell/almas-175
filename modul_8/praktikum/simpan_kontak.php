<?php
include 'admin/koneksi.inc.php';
//memindahkan nilai data form ke variabel sederhana agar mudah ditulis
$vnama=$_POST['nama'];
if(isset($_POST['jkel']))
   {
    /*other variables*/
    $vjkel = $_POST["jkel"];
   }
$vemail=$_POST['email'];
$valamat=$_POST['alamat'];
$vkota=$_POST['kota'];
$vpesan=$_POST['pesan'];
$sql="insert into kontak set nama='$vnama',
jkel='$vjkel',
email='$vemail',
alamat='$valamat',
kota='$vkota',
pesan='$vpesan'";
mysqli_query($conn, $sql) or die("Proses simpan ke database gagal");
mysqli_close($conn);
header("location:kontak.html");
?> 