<?php

// Operator Aritmatika
$x = 10;
$y = 15;

echo $x + $y;


// Operator concat / Penggabungan String / concatenation
$nama_depan = "Galang";
$nama_belakang = "Hanafi";

echo $nama_depan . " " . $nama_belakang;


// Operator Assignment
// seperti =, += , -= , *= , /= , .=
$z = 10;
$z -= 24;
echo $z;


// Operator Perbandingan
// seperti < , > , <= , >= , == , !=
var_dump(1 >= 2);


// Operator Identitas
// seperti === , !==
// bisa mengecek apakah tipe datanya sama atau tidak
var_dump(1 === "1");
var_dump(1 !== 1);


// Operator Logika
// seperti && , || , !
$a = 10;
var_dump($a < 21 && $a % 2 == 0);
