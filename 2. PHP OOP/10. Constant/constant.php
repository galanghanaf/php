<?php
// apa itu constan
// adalah sebuah identifier untuk menyimpan nilai
// sama halnya dengan variable, bedanya nilai yang disimpan
// tidak dapat berubah

// define(name, value)
define('NAMA', 'Galang Hanafi');
echo NAMA;

echo "<br>";

const UMUR = 20;
echo UMUR;

echo "<br>";

// perbedaan define dan const
// - pada saat penerapan OOP define tidak bisa disimpan didalam sebuah class, sebagai constanta global
// - const bisa disimpan kedalam class dan juga bisa diterapkan ke OOP

class Coba
{
    const ASAL = 'Indonesia';
}

// cara mengakses constant didalam class, menggunakan cara static
echo Coba::ASAL;
echo "<br>";

// Magic Constant
echo __LINE__; //menampilkan baris dimana constant ini ditulis
echo "<br>";

echo __FILE__; //menampilkan alamat dari file
echo "<br>";

echo __DIR__; //menampilkan alamat directory file
