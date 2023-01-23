<?php

// jualan produk buku dan game

class Produk
{
    public $judul = "judul",
        $penulis = "penulis",
        $penerbit = "penerbit",
        $harga = 10000;

    public function getLabel()
    {
        // dikarenakan variable yang ada didalam function,
        // tidak bisa menambahkan variable diluar function seperti $penulis, $penerbit,
        // karena akan membuat variable baru, agar variablenya
        // tetap sama diperlukanlah $this->penulis, $this->penerbit
        return "$this->penulis, $this->penerbit";
    }
}

// membuat object instance dari class
$produk1 = new Produk();
// disini kita bisa menimpa isi property
$produk1->judul = "Interstellar";
$produk1->penulis = "Galang";
// var_dump($produk1);

// kita juga bisa menambahkan property baru setelah objectnya di instansiasi
// maka dari itu diperlukan ketelitian ketika menimpa property 
// karena kalau salah tidak akan error malah menambah property yang baru,
// sehingga diperlukanlah visibility
$produk2 = new Produk();
$produk2->sutradara = "Budi";
// var_dump($produk2);

$produk3 = new Produk();
$produk3->judul = "Edge of Tomorrow";
$produk3->penulis = "Galang";
$produk3->penerbit = "Columbia Pictures";
$produk3->harga = 25000;
// var_dump($produk3);
echo "Nama Film : $produk3->judul, $produk3->penerbit";
echo "<br>";

// menampilkan method, dikarenakan property sudah ditimpa diproduk3,
// maka data yang ditampilkan ada data yang telah ditimpa
echo $produk3->getLabel();