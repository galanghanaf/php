<?php

// Membuat string menggunakan Singgle Quote
echo 'Name : ';
echo 'Galang Hanafi';

// Membuat string menggunakan Double Quote
echo "\n"; //slash \n untuk ENTER
echo "Nama : ";
echo "\tGalang Hanafi"; //slash \t untuk TAB

// Multiline String adalah sebuah string yang mempermudah
// melakukan enter dan spasi tanpa bantuan \t dan \n
// dengan menggunakan Heredoc dan Nowdoc

// Heredoc adalah fitur untuk membuat string yang panjang,
// sehingga kita tidak perlu manual melakukan enter, tab dll
echo <<<GALANG

ini adalah contoh string yang sangat panjang menggunakan Heredoc
dan juga tidak perlu menggunakan ENTER secara manual,
bisa juga menggunakan "double quote"
GALANG;

// Nowdoc memiliki fitur yang sama dengan Heredoc, namun
// tidak bisa melakukan parsing variable
echo <<<'HANAFI'

ini adalah contoh string yang sangat panjang menggunakan Nowdoc
dan juga tidak perlu menggunakan ENTER secara manual,
bisa juga menggunakan "double quote"
HANAFI;
