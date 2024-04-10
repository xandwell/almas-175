<?php
include "credentials.php";
if ($_POST['email'] == $email && $_POST['pass'] == $password) {

    date_default_timezone_set('Asia/Jakarta');
    
    $jam = date("h:i:s A");
    $hari = date("l");
    $tanggal = date("d-F-Y");

    echo "<center>Selamat datang, <strong>".$nama.".</strong></center>";
    echo "<center>E-mail: ".$email."</center><br><br>";
    echo "<center>Informasi waktu login:</center>";
    echo "<center>Jam: ".$jam."</center>";
    echo "<center>Hari: ".$hari."</center>";
    echo "<center>Tanggal: ".$tanggal."</center>";
} else {
    header("Location:gagal.php");
}
