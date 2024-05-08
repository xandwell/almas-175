<!DOCTYPE html>
<html>
<head>
    <title>Verifikasi</title>
    <style>
        html, body {
            height: 100%;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
<?php
include 'koneksi.inc.php';
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate username and password
    $input_email = $_POST["email"];
    $input_password = $_POST["password"];

    // Prepare SQL statement to fetch user details
    $sql = "SELECT * FROM userdata WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $input_email);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if user exists
    if ($result->num_rows == 1) {
        // Fetch user details
        $user = $result->fetch_assoc();

        // Verify password
        if ($input_password === $user['password']) {
            // Authentication successful, create session
            $_SESSION["authenticated"] = true;
            echo "<h1>Login berhasil!</h1>";
            header("Refresh: 1; URL='cetak.php'"); // Redirect to protected page
            exit();
        } else {
            echo "<h1>Invalid email atau password <br> Kembali dalam 2 detik..</h1> ";
            header("Refresh: 2; URL='index.php'");
        }
    } else {
        echo "<h1>Invalid email atau password <br> Kembali dalam 2 detik..</h1> ";
        header("Refresh: 2; URL='index.php'");
    }

    // Close database connection
    $stmt->close();
    $conn->close();
}
?> 
</body>
</html>

