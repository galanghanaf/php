<?php

// class merupakan template dari object
// tapi sebenarnya kita bisa mengakses property dan method
// tanpa melakukan instance dari class tersebut dengan cara
// menggunakan static property atau static method
class ContohStatic
{
    public static $angka = 1;

    public static function halo()
    {
        // $this->angka berlaku atau bisa digunakan,
        // bila objet sudah dilakukan instance, karenakan
        // disini kita tidak melakukan instance, diganti
        // menjadi seperti dibawah
        return "Halo " . self::$angka++ . " kali.";
    }
}

// mencetak property static
echo ContohStatic::$angka;
echo "<br>";
// mencetak method static
echo ContohStatic::halo();
echo "<hr>";
echo ContohStatic::halo();
echo "<hr>";
echo "<hr>";
echo "<hr>";

// untuk apa static keyword?
// member terikat dengan class bukan dengan object
// nilai static akan selalu tetap meskipun object di instansiasi
// berulang kali
// dengan menggunakan static membuat kode menjadi procedural
// biasanya digunakan untuk membuat fungsi bantuan/helpel
// serta digunakan diclass-class utility pada framework

class Contoh
{
    public static $nomor = 1;
    // public $nomor = 1;
    public function hai()
    {
        return "hai " . self::$nomor++ . " kali. <br>";
    }
}

$obj1 = new Contoh;
echo $obj1->hai();
echo $obj1->hai();
echo $obj1->hai();
echo "<hr>";
$obj2 = new Contoh;
echo $obj2->hai();
echo $obj2->hai();
echo $obj2->hai();
