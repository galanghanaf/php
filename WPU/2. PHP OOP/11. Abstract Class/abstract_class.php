<?php
// Abstract Class
// 1. Sebuah kelas yang tidak dapat di instance
// 2. Kelas 'abstrak'
// 3. Mendefinisikan interface untuk kelas lain yang menjadi turunanya
// 4. Berperan sebagai kerangka dasar untuk kelas turunanya
// 5. Biasanya memiliki 1 method abstrak
// 6. Digunakan dalam pewarisan / inheritance untuk memaksakan
//    implementasi method abstrak yang sama untuk semua kelas turunannya

// Ada lagi consept lainnya yaitu
// 1. Semua kelas turunannya, harus mengimplementasikan method
//    abstrak yang ada di kelas parentnya
// 2. Kelas abstrak boleh memiliki property / method reguler (public, protected, private)
// 3. Kelas abstrak boleh memiliki property / static method

// Kenapa menggunakan kelas abstrak?
// 1. Merepresentasikan ide atau konsep dasar (keputusan design)
// 2. pada konsep OOP terdapat "Composition over Inheritance"
//    sebaiknya melakukan komposisi(abstrak atau interface) dibandingkan melakukan pewarisan begitu saja
// 3. Abstrak merupakan salah satu cara menerapkan konsep Polimorphism
// 4. Sentralisasi Logic
// 5. Mempermudah pengerjaan tim

abstract class Produk
{
    private $judul, $penulis, $penerbit, $harga;

    protected $diskon = 0;

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

// method abstrak
    abstract public function getInfoProduk();

    public function getInfo()
    {
        $str = "{$this->getLabel()}, {$this->penerbit}, (Rp. {$this->harga})";

        return $str;
    }

    public function setJudul($judul)
    {

        return $this->judul = $judul;

    }

    public function getJudul()
    {
        return $this->judul;
    }

    public function setPenulis($penulis)
    {
        return $this->penulis = $penulis;
    }

    public function getPenulis()
    {
        return $this->penulis;
    }

    public function setPenerbit($penerbit)
    {
        return $this->penerbit = $penerbit;
    }

    public function getPenerbit()
    {
        return $this->penerbit;
    }

    public function setHarga($harga)
    {
        return $this->harga = $harga;
    }

    public function getHarga()
    {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

}

class Game extends Produk
{
    public $jmlMain;

    public function __construct($judul, $penulis, $penerbit, $harga = 0, $jmlMain = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->jmlMain = $jmlMain;
    }

// harus ada turunan method abstract
    public function getInfoProduk()
    {
        $str = "Game :" . parent::getInfo() . "~ {$this->jmlMain} Jam.";
        return $str;
    }

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

// harus ada turunan method abstract
    public function getInfoProduk()
    {

        $str = "Film :" . parent::getInfo() . " ~ {$this->jmlNonton} Menit.";
        return $str;
    }
}

class CetakInfoProduk
{
    public $daftarProduk = [];

    public function tambahProduk(Produk $produk)
    {
        $this->daftarProduk[] = $produk;
    }

    public function cetak()
    {
        $str = "DAFTAR PRODUK : <br>";
        foreach ($this->daftarProduk as $p) {
            $str .= "- {$p->getInfoProduk()} <br>";
        }
        return $str;
    }
}

$produk2 = new Game("Valheim", "Hanafi", "Iron Gate Studio", 110000, 70);
$produk3 = new Film("Edge of Tomorrow", "Galang", "Columbia Pictures", 25000, 120);

$cetakProduk = new CetakInfoProduk;
$cetakProduk->tambahProduk($produk2);
$cetakProduk->tambahProduk($produk3);

echo $cetakProduk->cetak();
