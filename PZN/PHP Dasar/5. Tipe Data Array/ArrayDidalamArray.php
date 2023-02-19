<?php
$galang = [
    "id" => "A001",
    "name" => "Galang Hanafi",
    "age" => 17,
    "address" => [
        "city" => "Bogor",
        "country" => "Indonesia"
    ]
];
// cara mengakses isi value city
var_dump($galang['address']['city']);
