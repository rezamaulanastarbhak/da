<?php
include_once "data/animal.php";

$ayam = new Animal("ayam","unggas","darat");
//langsung propertinya
//$ayam->nama = "chicken"; //error
$ayam->cetak();
// $ayam->nama = "ayam"; //public
// $ayam->jenis = "unggas";
// $ayam->lingkungan = "darat";
// echo "nama : {$ayam->nama} <br>";
// echo "jenis : {$ayam->jenis} <br>";
// echo "hidup di : {$ayam->lingkungan} <br>";
// echo "suara :  ";
// $ayam->suara();
// echo "<br>";

$kucing = new Animal("kucing","mamalia","darat");
$kucing->cetak();
// $kucing->nama = "kucing";
// $kucing->jenis = "mamalia";
// $kucing->lingkungan = "darat";

// echo "nama : {$kucing->nama} <br>";
// echo "jenis : {$kucing->jenis} <br>";
// echo "hidup di : {$kucing->lingkungan} <br>";
// echo "suara :  ";
// $kucing->suara();

$kodok = new Animal("kodok", "ampibi", "darat dan air");
$kodok->cetak();