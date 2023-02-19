<?php
//  Definisi dan Penjelasan Class
//      1. Blueprint/template untuk membuat implementasi(instance) dari object
//      2. Class mendefinisikan object
//      3. class bisa menyimpan data dan perilaku, yang disebut property dan method

//  Object merupakan implementasi (instance) dari rancangan class
class Coba
{
    public $a; // property

    // method
    public function b()
    {
    }
}

// Definisi dan penjelasan Object
//      1. Instance yang didefinisikan oleh class, jadi bentuk nyatanya adalah object
//         bukan class karena class hanyalah template
//      2. banyak object dapat dibuat menggunakan satu class
//      3. object yang dibuat menggunakan keyword new

// membuat object berdasarkan dari blueprint class Coba
$a = new Coba();
$b = new Coba();

var_dump($a);
var_dump($b);
