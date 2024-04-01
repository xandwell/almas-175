<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata</title>
    <link rel="stylesheet" href="stylebiodata.css">
</head>
<body>
    <div class="container">
        <h1>Form Biodata</h1>
        <br>
        <form action="#" method="post">
            Nama: <input type="text" name="nama"> <br> <br>
            Jenis Kelamin: <br>
            <input type="radio" name="gender" value="Laki-laki"> Laki-laki
            <input type="radio" name="gender" value="Perempuan"> Perempuan
            <br> <br>
            Tempat / Tanggal Lahir: <br>
            <input type="text" name="tempat-lahir">
            <input type="date" name="tanggal-lahir">
            <br> <br>
            Alamat: <br>
            <textarea name="alamat" cols="30" rows="10"></textarea>
            <br>
            <br>
            <input type="submit" name="submit" value="Submit">
        </form>
        <br>
        <br>

        <table border='1'>
        <tr>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Tempat / Tanggal Lahir</th>
            <th>Alamat</th>
        </tr>

        <?php
        if (isset($_POST['submit'])) {
            $nama = $_POST['nama'];
            $gender = $_POST['gender'];
            $tempat = $_POST['tempat-lahir'];
            $tanggal = $_POST['tanggal-lahir'];
            $alamat = $_POST['alamat'];


            // Validate form data (you can add more validation if needed)
            if (!empty($nama) && !empty($gender) && !empty($tempat) && !empty($tanggal) && !empty($alamat)) {
                // Append data to the table
                echo "<tr><td>$nama</td><td>$gender</td><td>".$tempat." / ".$tanggal."</td><td>$alamat</td></tr>";
            } 
        }
        ?>
        
        
    </div>
</body>
</html>