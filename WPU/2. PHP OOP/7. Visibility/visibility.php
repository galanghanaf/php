<?php
// visibility atau access modifier
// visibility adalah konsep yang digunakan untuk mengatur akses dari
// properti dan method pada sebuah objek.

// ada 3 keyword visibility yaitu public, protected dan private
// public => digunakan dimana saja, bahkan diluar kelas
// protected => hanya dapat digunakan di dalam sebuah kelas beserta turunanya
// private => hanya dapat digunakan di dalam sebuah kelas saja

// kenapa sih kita perlu menerapkan akses modifier atau visibility ini
// 1. hanya memperlihatkan aspek dari class yang dibutuhkan oleh client
//    supaya bisa menentukan bisa atau tidak bisa dimodifikasi dari luar class
// 2. menentukan kebutuhan yang jelas untuk object
// 3. kita bisa memberikan kendali pada kode untuk menghindari bug

class Produk
{
    public $judul,
    $penulis,
        $penerbit;

    protected $diskon = 0;
    private $harga;

    public function __construct($judul, $penulis, $penerbit, $harga = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;

    }

    public function getLabel()
    {
        return "$this->judul, $this->penulis";
    }

    public function getInfoProduk()
    {
        $str = "{$this->getLabel()}, {$this->penerbit}, (Rp. {$this->harga})";

        return $str;
    }

    // memanggil data harga yang diprivate, dengan cara membuat function
    // didalam clas
    public function getHarga()
    {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }
}

class Game extends Produk
{
    // setelah itu kita isi property $jmlMain menggunakan construct
    public $jmlMain;

    // construct ini berfungsi untuk overiding atau melakukan pengambilan alih
    // fungsionalitas dari method parentnya
    public function __construct($judul, $penulis, $penerbit, $harga = 0, $jmlMain = 0)
    {
        // disini kita akan memanggil class construct parentnya
        // yang dimana hanya sebagian yang diambil
        parent::__construct($judul, $penulis, $penerbit, $harga);

        // sisanya kita isi manual
        $this->jmlMain = $jmlMain;
    }

    public function getInfoProduk()
    {

        // disinilah overiding berfungsi ,
        // agar ketika memanggil getInfoProduk yang terpanggil adalah parentnya

        //  dan titik 2 :: ini merupakan method static
        $str = "Game :" . parent::getInfoProduk() . "~ {$this->jmlMain} Jam.";
        return $str;
    }

// memanggil data diskon yang diprotected, dengan cara membuat function
// didalam class atau turunannya

    public function setDiskon($diskon)
    {
        return $this->diskon = $diskon;
    }
}

class Film extends Produk
{

    public $jmlNonton;

    public function __construct($judul, $penulis, $penerbit, $harga = 0, $jmlNonton = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlNonton = $jmlNonton;

    }

    public function getInfoProduk()
    {

        $str = "Film :" . parent::getInfoProduk() . " ~ {$this->jmlNonton} Menit.";
        return $str;
    }
}

$produk2 = new Game("Valheim", "Hanafi", "Iron Gate Studio", 110000, 70);
$produk3 = new Film("Edge of Tomorrow", "Galang", "Columbia Pictures", 25000, 120);

echo $produk2->getInfoProduk();
echo "<br>";
echo $produk3->getInfoProduk();
echo "<hr>";

// cara memanggil property yang telah di protected
// dengan cara membuat method yang terkait dengan class atau turunannya

// cara memanggil property yang telah di private
// dengan cara membuat method yang terkait dengan class saja
$produk2->setDiskon(70);
echo $produk2->getHarga();
