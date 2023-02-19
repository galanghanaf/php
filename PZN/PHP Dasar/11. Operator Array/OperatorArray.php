<?php

// Di PHP array memiliki operator khusus,
// mungkin terlihat mirip seperti operator-operator
// sebelumnya, tapi cara kerjanya sedikit berbeda

// Operator Union $a + $b          = menggabungkan array $a dan $b
// Operator Equality $a == $b      = true jika $a dan $b, memiliki key-value sama 
// Operator Identity $a === $b     = true jika $a dan $b, memiliki key-value sama dan posisi sama
// Operator Inequality $a != $b    = true jika $a dan $b, tidak sama
// Operator Inequality $a <> $b    = true jika $a dan $b, tidak sama
// Operator Nonidentity $a !== $b  = true jika $a dan $b, tidak identik

$first = [
    "first_name" => "Galang"
];
$last = [
    "first_name" => "Andi",
    "last_name" => "Hanafi"
];

// apabila terdapat key yang sama dengan array sebelumnya, maka akan diignore
$fullname = $first + $last;
var_dump($fullname);


$a = [
    "first_name" => "Galang",
    "last_name" => "Hanafi",
];
$b = [
    "last_name" => "Hanafi",
    "first_name" => "Galang",
];

// apabila key dan value sama, walaupun posisi diacak
// akan menampilkan hasil true
var_dump($a == $b);

// apabila key dan value sama, tetapi posisi diacak
// maka menampilkan hasil false
var_dump($a === $b);
