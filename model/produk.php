<?php
class Produk{
//member1 var
private $koneksi;
//member2 konstruktor
public function __construct()
{
    global $dbh;//instance obj dbkoneksi.php
    $this->koneksi = $dbh;
}
//member3 method CRUD
public function dataProduk(){
    $sql = "SELECT produk.*, jenis.nama as kategori FROM produk INNER JOIN jenis ON jenis.id = produk.idjenis";
    $ps = $this->koneksi->prepare($sql); //prepare statement PDO
    $ps->execute();
    $rs = $ps->fetchAll();
    return $rs;
}
}