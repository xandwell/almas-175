<html>
    <head>
        <title>Koneksi Database MySQL</title>
    </head>
    <body>
        <h1>Koneksi database dengan mysqli_fetch_array()</h1>
        <?php
        $conn = mysqli_connect('localhost', 'root', '') or die ('Koneksi gagal.');
        mysqli_select_db($conn, 'latihandb');
        $hasil = mysqli_query($conn, 'SELECT * FROM LIGA');
        while ($row = mysqli_fetch_array($hasil)) {
            echo 'Liga '.$row['NEGARA'].'<br>';
        }
        ?>
    </body>
</html>