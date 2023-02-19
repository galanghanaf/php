<?php

// Operator Increment 

// Post Increment $a++ => kembalikan $a lalu naikan satu angka
// Pre Increment  ++$a => naikan $a satu angka, lalu kembalikan $a

$a = 1;
$a++;

var_dump($a);

$b = 1;
++$b;
var_dump($b);

// Sebenarnya sama saja hasilnya 2, tapi apabila masuk kedalam
//  kasus yang spesifik seperti dibawah
// atau ingin menyimpan data divariable lain 
// maka akan terlihat perbedaannya

// Post Increment
// disini maksudnya, nilai i dikembalikan ke j, setelah itu nilai i dinaikan
// gambaranya seperti
// $j = $i
// $i = $i + 1
$i = 10;
$j = $i++;
var_dump($j);

// Pre Increment
// disini maksudnya, nilai x dinaikan dulu, setelah itu datanya dikirim ke y
// gambaranya seperti
// $x = $x + 1
// $y = $x
$x = 10;
$y = ++$x;
var_dump($y);
