<?php
if (empty($_POST['nama'])) { // cek apakah nama kosong
    // jika iya, lompat ke kosong.php
    header("Location:kosong.php");
} else {
    // selain itu cetak nama
    echo "<center>Nama :".$_POST['nama']."</center><br>";
}
?>
