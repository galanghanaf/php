<?php

session_start();

// sebenarnya untuk keluar hanya perlu menggunakan session_destroy
// namun ada beberpa kasus dan juga untuk memastikan agar user benar keluar
// maka ditambahkan $_SESSION = [] dan session_unset 
$_SESSION = [];
session_unset();
session_destroy();

// menghapus cookie
setcookie('id', '', time() - 3600);
setcookie('key', '', time() - 3600);

header("Location: login.php");
exit;