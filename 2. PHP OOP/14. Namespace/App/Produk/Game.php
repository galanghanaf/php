<?php

namespace App\Produk;

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
