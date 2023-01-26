<?php

// Interface
// 1. Adalah kelas abstrak yang sama sekali tidak memiliki implementasi
// 2. murni merupakan template untuk kelas turunannya
// 3. tidak boleh memiliki property, hanya deklarasi method saja
// 4. Semua method harus di deklarasikan dengan visibility public
// 5. boleh mendeklarasikan __construct
// 6. Satu kelas boleh mengimplementasikan banyak interface
// 7. Dengan menggunakan type-hinting dapat melakukan dependency injection
// 8. pada akhirnya akan mencapai Polymorphism

interface InfoProduk
{
    public function getInfoProduk();

}

class Produk
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

// mewarisi semua property dan method produk, dan mengimplementasi infoproduk
class Game extends Produk implements InfoProduk
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

// mewarisi semua property dan method produk, dan mengimplementasi infoproduk
class Film extends Produk implements InfoProduk
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
