<?php
// set cookie baru berisi text "Ini adalah variable cookies"
setcookie("variable_cookies", "Ini adalah variable cookies", time() +60);

// link untuk cek cookie
echo"<a href=cekcookies.php>Cek Cookies</a>"; 
?>