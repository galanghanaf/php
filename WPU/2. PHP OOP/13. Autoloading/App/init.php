<?php

// require_once 'Produk/InfoProduk.php';
// require_once 'Produk/Produk.php';
// require_once 'Produk/Game.php';
// require_once 'Produk/Film.php';
// require_once 'Produk/CetakInfoProduk.php';

// berikut adalah fungsi yang khusu autoloading semua kelas.
// selanjutnya untuk mempermudah menggunakan closur atau fungsi tanpa nama
spl_autoload_register(function ($class) {
    require_once __DIR__ . '/Produk/' . $class . '.php';
});
