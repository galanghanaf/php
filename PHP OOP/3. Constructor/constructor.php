<?php

// jualan produk buku dan game

class Produk
{
    // untuk bagian property bisa di isi default atau bisa juga tidak
    // public $judul = "judul",
    //     $penulis = "penulis",
    //     $penerbit = "penerbit",
    //     $harga = 0;

    public $judul,
        $penulis,
        $penerbit,
        $harga;


    // untuk construct, isi variablenya bisa diisi dengan defaultnya
    // seperti dibawah dan bisa juga tidak diisi
    // public function __construct($judul, $penulis, $penerbit, $harga)
    public function __construct(
        $judul = "judul",
        $penulis = "penulis",
        $penerbit = "penerbit",
        $harga = 0
    ) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel()
    {

        return "$this->judul, $this->penerbit";
    }
}


$produk2 = new Produk("Valheim", "Hanafi", "Iron Gate Studio", 110000);
$produk3 = new Produk("Edge of Tomorrow", "Galang", "Columbia Pictures", 25000);


echo "Nama Game : " . $produk2->getLabel();
echo "<br>";

echo "Nama Film : " . $produk3->getLabel();