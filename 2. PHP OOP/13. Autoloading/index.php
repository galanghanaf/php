<?php
require_once __DIR__ . '/App/init.php';

$produk2 = new Game("Valheim", "Hanafi", "Iron Gate Studio", 110000, 70);
$produk3 = new Film("Edge of Tomorrow", "Galang", "Columbia Pictures", 25000, 120);

$cetakProduk = new CetakInfoProduk;
$cetakProduk->tambahProduk($produk2);
$cetakProduk->tambahProduk($produk3);

echo $cetakProduk->cetak();

echo '<br>';

new Contoh();
