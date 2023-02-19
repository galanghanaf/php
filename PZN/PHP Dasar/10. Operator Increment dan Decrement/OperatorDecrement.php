<?php

// Operator Decrement 

// Post Decrement $a-- => kembalikan $a lalu naikan satu angka
// Pre Decrement  --$a => naikan $a satu angka, lalu kembalikan $a

$a = 2;
$a--;

var_dump($a);

$b = 2;
--$b;
var_dump($b);

// Sebenarnya sama saja hasilnya 1, tapi apabila masuk kedalam
//  kasus yang spesifik seperti dibawah
// atau ingin menyimpan data divariable lain 
// maka akanterlihat perbedaannya

// Post Decrement
// disini maksudnya, nilai i dikembalikan ke j, setelah itu nilai i diturunkan
// gambaranya seperti
// $j = $i
// $i = $i - 1
$i = 10;
$j = $i--;
var_dump($j);

// Pre Decrement
// disini maksudnya, nilai x diturunkan dulu, setelah itu datanya dikirim ke y
// gambaranya seperti
// $x = $x - 1
// $y = $x
$x = 10;
$y = --$x;
var_dump($y);
