<?php

$name = "Galang";
$name = null;
$age = null;

echo "Name : ";
echo $name;
echo "\n";

echo "Age : ";
echo $age;
echo "\n";

// Mengecek apakah data yang ada pada variable NULL/Kosong
echo "Is Name Null : ";
var_dump(is_null($name));
echo "\n";

// Menghapus variable
$contoh = "ini contoh";
unset($contoh);
// ketika divardump menggunakan is_null maka akan tampil error
// karena variable sudah dihapus
// var_dump(is_null($contoh));

// maka dari itu untuk memastikan variable ada dan nilainya tidak null
// bisa menggunakan isset daripa is_null
var_dump(isset($contoh));
