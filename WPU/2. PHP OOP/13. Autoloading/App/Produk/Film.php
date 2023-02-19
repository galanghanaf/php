<?php
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
