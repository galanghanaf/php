<?php

// jualan produk buku dan game

class Produk
{
    public $judul,
        $penulis,
        $penerbit,
        $harga;

    public function __construct($judul, $penulis, $penerbit, $harga)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel()
    {

        return "$this->judul";
    }
}


class cetakInfoProduk
{
    // berikut ini ada cara agar function cetak hanya menerima
    // secara spesifik kelas produk maka bisa diubah menjadi
    // seperti public funtion cetak (Produk $produk)
    public function cetak(Produk $produk)
    {
        // bisa juga disimpan dengan kurung kurawal untuk memudahkan
        // penggabungan string
        $str = "{$produk->getLabel()} | {$produk->penulis} Harga {$produk->harga}";
        return $str;
    }
}

$produk2 = new Produk("Valheim", "Hanafi", "Iron Gate Studio", 110000);
$produk3 = new Produk("Edge of Tomorrow", "Galang", "Columbia Pictures", 25000);


echo "Nama Game : " . $produk2->getLabel();
echo "<br>";

echo "Nama Film : " . $produk3->getLabel();
echo "<br>";

// cara mencetak object type
$infoProduk1 = new cetakInfoProduk();
echo $infoProduk1->cetak($produk2);