<?php
if(isset($_COOKIE['variable_cookies'])) { // cek penerapan cookie
    // jika cookie on
    echo 'Variable cookiesnya "$variable_cookies" nilainya adalah '.$_COOKIE['variable_cookies'];
} else {
    // jika cookie off
    echo "Variable cookies belum diterapkan";
}
?>