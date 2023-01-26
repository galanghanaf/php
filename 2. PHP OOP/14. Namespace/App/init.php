<?php

// require_once 'Produk/InfoProduk.php';
// require_once 'Produk/Produk.php';
// require_once 'Produk/Game.php';
// require_once 'Produk/Film.php';
// require_once 'Produk/CetakInfoProduk.php';

// berikut adalah fungsi yang khusu autoloading semua kelas.
// selanjutnya untuk mempermudah menggunakan closur atau fungsi tanpa nama
spl_autoload_register(function ($class) {

// data yang dipecah App\Produk\User menjadi  ["App", "Produk", "User"]
    $class = explode('\\', $class); // untuk memecah string
    $class = end($class); //memanggil elemen terakhir
    require_once __DIR__ . '/Produk/' . $class . '.php';
});
spl_autoload_register(function ($class) {
    $class = explode('\\', $class); // untuk memecah string
    $class = end($class); //memanggil elemen terakhir
    require_once __DIR__ . '/Service/' . $class . '.php';
});
