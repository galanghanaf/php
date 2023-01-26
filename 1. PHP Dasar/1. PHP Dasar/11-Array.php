<?php
// array
// adalah variabel yang dapat memiliki banyak nilai
// elemen pada array boleh memiliki tipe data yang berbeda
// pasangan antara key dan value
// key-nya adalah index, yang dimulai dari 0


// cara lama sebelum php versi 5.4
$hari = array("Senin", "Selasa", "Rabu");

// cara baru setelah php versi 5.4 keatas
$bulan = ["Januari", "Februari", "Maret"];
$arr1 = [123, "tulisan", true];

// cara menampilkan array
var_dump($hari);
echo "<br>";

print_r($bulan);
echo "<br>";

// cara menampilkan 1 elemen di dalam array menggunakan echo
echo $arr1[0];
echo "<br>";
echo $bulan[1];
echo "<br>";

// cara menambahkan elemen baru pada array

$day[] = "Sunday";
$day[] = "Monday";
echo "<br>";
var_dump($day);

// semua cara diatas hanya bisa dilakukan ketika melakukan debugging