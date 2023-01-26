<?php

// inheritance
// menciptakan hirarki antar kelas (parent & child)
// child class mewarisi semua properti dan method dari parent nya (yang visible)
// child class memperluas (exteds) fungsionalitasnya dari parentnya

class Produk
{
    public $judul,
    $penulis,
    $penerbit,
    $harga,
    $jmlMain,
        $jmlNonton;

    public function __construct($judul, $penulis, $penerbit, $harga = 0, $jmlMain = 0, $jmlNonton = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlMain = $jmlMain;
        $this->jmlNonton = $jmlNonton;

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
    public function getInfoProduk()
    {
        $str = "Game : {$this->getLabel()}, {$this->penerbit}, (Rp. {$this->harga}) ~ {$this->jmlMain} Jam.";
        return $str;
    }
}

class Film extends Produk
{
    public function getInfoProduk()
    {

        $str = "Film : {$this->getLabel()}, {$this->penerbit}, (Rp. {$this->harga}) ~ {$this->jmlNonton} Menit.";
        return $str;
    }
}

$produk2 = new Game("Valheim", "Hanafi", "Iron Gate Studio", 110000, 70, 0);
$produk3 = new Film("Edge of Tomorrow", "Galang", "Columbia Pictures", 25000, 0, 120);

echo $produk2->getInfoProduk();
echo "<br>";
echo $produk3->getInfoProduk();

// disini ada fungsi overiding, yang dimana bisa memakai
// nama fungsi yang sama dengan class parentnya, dimateri selanjutnya

// contohnya seperti pada class game yang dimana pada str terdapat
// pemanggilan getInfoProduk yang dimana untuk memanggil function class parentnya
// nama getInfoProduk merupakan nama yang digunakan oleh function yang ada di class game
//  disinilah pentingnya overiding pada materi selanjutnya

// class Game extends Produk
// {
//     public function getInfoProduk()
//     {
//         $str = "Game : {$this->getInfoProduk()} ~ {$this->jmlMain} Jam.";
//         return $str;
//     }
// }
