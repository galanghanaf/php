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
    $jmlNonton,
        $tipe;

    public function __construct($judul, $penulis, $penerbit, $harga = 0, $jmlMain = 0, $jmlNonton = 0, $tipe)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlMain = $jmlMain;
        $this->jmlNonton = $jmlNonton;
        $this->tipe = $tipe;
    }

    public function getLabel()
    {

        return "$this->judul, $this->penulis";
    }

// pada problem kali ini, akan menampilkan info detail dari produk yang berbeda

// contoh
// Game : Valheim | Hanafi, Iron Gate Studio, (RP. 110000) ~ 70 Jam
// Film : Edge of Tomorrow | Galang, Columbia Pictures, (RP. 25000) - 120 Menit

    public function getInfoProduk()
    {
        $str = "{$this->tipe} : {$this->getLabel()}, {$this->penerbit}, (Rp. {$this->harga})";
        if ($this->tipe == "Game") {
            $str .= "~ {$this->jmlMain} Jam.";
        } else if ($this->tipe == "Film") {
            $str .= "- {$this->jmlNonton} Menit.";
        }
        return $str;

    }
}

$produk2 = new Produk("Valheim", "Hanafi", "Iron Gate Studio", 110000, 70, 0, "Game");
$produk3 = new Produk("Edge of Tomorrow", "Galang", "Columbia Pictures", 25000, 0, 120, "Film");

echo $produk2->getInfoProduk();
echo "<br>";
echo $produk3->getInfoProduk();

// disinilah problemnya apabila data seperti diatas sangat banyak,
// maka akan sangat merepotkan oleh karena itu diperlukanlah inheritance untuk solusinya
