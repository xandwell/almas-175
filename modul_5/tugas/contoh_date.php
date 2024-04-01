<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Date</title>
</head>
<body>
<?php
// Contoh 1: tanggal saat ini, format YYYY-MM-DD
$tanggal1 = date("Y-m-d");
echo "Tanggal saat ini: $tanggal1 <br>";

// Contoh 2: jam saat ini, format 12-jam dengan AM/PM
$waktu2 = date("h:i:s A");
echo "Waktu saat ini: $waktu2 <br>";

// Contoh 3: tanggal dan waktu saat ini dalam format kustom
$datetime3 = date("D M j, Y, g:i a");
echo "Tanggal dan waktu saat ini: $datetime3 <br>";

// Contoh 4: hari ini, dalam teks
$hari4 = date("l");
echo "Hari ini adalah: $hari4 <br>";

// Contoh 5: bulan ini, dalam teks
$bulan5 = date("F");
echo "Bulan saat ini: $bulan5 <br>";
?>

</body>
</html>