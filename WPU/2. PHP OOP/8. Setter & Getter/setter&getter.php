<?php
// Setter & getter atau accessor method
// setter & getter ini terkait erat dengan visibility
// alasan disebut erat kaitannya karena untuk menghindari
// pada saat membuat property dengan visibility public,
// karena sebaiknya kita tidak membiarkan
//  bagian dari luar class mengakses property tersebut
//  secara langsung

// kenapa sih diperlukan setter dan getter
// fungsinya adalah ketika secara spesifik
// property tersebut hanya inggin dimasukan tipe data string saja
// contohnya ada di line 44
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

    public function getInfoProduk()
    {
        $str = "{$this->getLabel()}, {$this->penerbit}, (Rp. {$this->harga})";

        return $str;
    }

    // contoh penggunaan setter pada property private, agar bisa diakses secara public
    // serta dapat melakukan perubahan isi data property
    public function setJudul($judul)
    {
        if (!is_string($judul)) {
            throw new Exception("Judul harus string");
        }
        return $this->judul = $judul;

    }

    // contoh penggunaan getter pada property private, agar bisa diakses secara public
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
$produk2->setHarga(10000);
$produk2->setDiskon(70);
echo $produk2->getHarga();

echo "<hr>";

// memanggil getter
echo $produk3->getPenerbit();
echo "<br>";
// memanggil setter dan mengubah isi datanya
echo $produk2->setJudul("ini adalah judul");
echo $produk2->setJudul(123);
