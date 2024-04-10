<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan POST</title>
</head>
<body>
    <!-- form menggunakan $_GET -->
<form method="POST" action="postAct.php">
  <table width="400" align="center" cellpadding="2" cellspacing="2">
    <!-- field isi nama & email -->
    <tr>
      <td width="130">Nama</td>
      <td><input type="text" name="nama"></td>
    </tr>
    <tr>
      <td width="130">Email</td>
      <td><input type="text" name="email"></td>
    </tr>
    <tr>
      <!-- tombol submit dan reset form -->
      <td>
        <input type="submit" name="btnLogin" value="Login">
        <input type="reset" name="reset" value="reset">
      </td>
    </tr>
  </table>
</form>
</body>
</html>