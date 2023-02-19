<?php

require_once __DIR__ . '/App/init.php';

// berikut untuk memanggil class yang menggunakan namespace
use App\Produk\User;
new User();

// atau bisa juga menggunakan cara seperti dibawah

echo "<br>";
new App\Service\User();
