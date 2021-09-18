<?php

class Produk {
    public $judul = "judul",
           $penulis = "penulis",
           $penerbit = "penerbit",
           $harga = 0;
}

$produk1 = new Produk();
$produk1->judul = "Naruto";
var_dump($produk1);

$produk2 = new produk();
$produk2->judul = "uncharted";
$produk2->tambahProperty = "hahaha";
var_dump($produk2);
