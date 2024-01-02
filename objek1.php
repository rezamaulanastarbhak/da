<?php
include_once "data/car.php";

$avanza = new Carr();
$avanza->name="avanza";
// $avanza->brand="Toyota";
$avanza->color="hitam";
$avanza->say();
echo "nama mobil : {$avanza->name} <br>";
echo "brand mobil : {$avanza->brand} <br>";
echo "warna mobil : {$avanza->color} <br>";


$fusso = new Carr();
$fusso->name="fusso";
$fusso->brand="hino";

echo "nama mobil : {$fusso->name} <br>";
echo "brand mobil : {$fusso->brand} <br>";
echo "warna mobil : {$fusso->color} <br>";

