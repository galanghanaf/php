<?php

// kadang kita butuh menggabungkan variabel dengan string
// tanpa ada spasi. hal ini akan menyulitkan jika hanya
// menggunakan variable parsing.

// untungnya diphp kita bisa menambahkan kurung kurawal,
// sebelum menggunakan variable parsing
$date = date('dmY');
$id = "P001";
echo "Your ID is {$date}{$id}" . PHP_EOL;

$var = "egg";
echo "This is {$var}s";
