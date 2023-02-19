<?php

$values = array(1, 2, 3, 4.5);
var_dump($values);

$names = ["Galang", "Hanafi", 17];
var_dump($names);

// Operasi Array
//mengakses data array pada nomor index
var_dump($names[1]);

// Mengubah data array pada nomor index dengan value baru
$names[2] = "Umur 17";
var_dump($names[2]);

// Menambah data array pada posisi paling belakang
$names[] = "Seorang Mahasiswa";
var_dump($names);

// Menghapus data diarray dan index array
unset($names[3]);
var_dump($names);

// Mengambil total data array
var_dump(count($names));
