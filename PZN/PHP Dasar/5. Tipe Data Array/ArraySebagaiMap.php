<?php
// Map yaitu asosiasi antara key dan value
// yang dimana secara default array pada PHP
// menggunakan index(number) sebagai key
// dan valuenya bisa diisi secara bebas

// disinilah maksud dari tipe data yang bernama Map
// dimana kita bisa mengubah indexnya menjadi string
// ataupun integer

$galang = array(
    "id" => "A001",
    "name" => "Galang",
    "age" => 17
);
var_dump($galang);

$hanafi = [
    "id" => "B002",
    "name" => "Hanafi",
    "age" => 20
];
var_dump($hanafi);

// misal kita tidak menentukan key-nya 
// maka key-nya akan secara default dibuatkan menjadi integer
$contoh = [
    "C003",
    "contoh",
    "age" => 10
];
var_dump($contoh);
