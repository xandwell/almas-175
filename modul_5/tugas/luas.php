<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luas Persegi Panjang</title>
    <link rel="stylesheet" href="styleluas.css">
</head>

<body>
    <section class="hero">

        <form action="#" class="container" method="post">
            <h1>Hitung luas persegi panjang</h1>
            <div class="container-input">
                <input type="number" id="number1" name="panjang" placeholder="Panjang">

                <input type="number" id="number2" name="lebar" placeholder="Lebar">

                <input type="submit" value="Submit">

            </div>

            <div class="container-output">

                <?php
                $hasil = 0;

                if (isset($_POST['panjang']) && isset($_POST['lebar'])) {
                    $panjang = $_POST['panjang'];
                    $lebar = $_POST['lebar'];
                    
                    $hasil = $panjang * $lebar;
                }

                ?>
                <h1>Hasil: <span id="hasil" name="hasil"><?php echo $hasil; ?></span> </h1>

            </div>
</form>


    </section>
</body>

</html>