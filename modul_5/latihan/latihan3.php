<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi Tipe</title>
</head>
<body>
    <?php
    $a = 300.4;
    echo $a;
    echo "<br>";
    echo "tipe Double : ", doubleval($a), "<br>";
    echo "tipe Integer : ", intval($a), "<br>";
    echo "tipe String : ", strval($a), "<br>";
    ?>
</body>
</html>