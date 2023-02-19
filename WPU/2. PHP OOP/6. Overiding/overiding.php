<?php

class Produk
{
    public $judul,
    $penulis,
    $penerbit,
        $harga;

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
