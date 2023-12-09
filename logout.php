<?php
// halaman php untuk menghapus session
session_start();
session_destroy();
$_SESSION = [];
session_unset();

// logoout dari halaman index dan hapus cookie
setcookie('id', '', time() - 3600);
setcookie('key', '', time() - 3600);

// kembalikan kehalaman login
header ("location: login.php");
exit;

?>