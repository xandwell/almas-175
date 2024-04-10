<html>

<head>
  <title>Login Sistem</title>
</head>

<body>
  <form method="POST" action="verification.php">
    <table width="400" align="center" cellpadding="2" cellspacing="2">
      <tr>
        <td width="130">Email</td>
        <td><input type="email" name="email"></td>
      </tr>
      <tr>
        <td width="130">Password</td>
        <td><input type="password" name="pass"></td>
      </tr>
      <tr>
        <td>
          <input type="submit" name="btnLogin" value="Login">
          <input type="reset" name="reset" value="reset">
        </td>
      </tr>
    </table>
</body>

</html>