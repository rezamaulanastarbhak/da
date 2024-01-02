<?php

require_once "data/nabung.php";

$khansa = new Nabung();
$khansa->nama = "Khansa";
$khansa->no_rek = "000239";
$khansa->saldo = 10000;

$khansa->cetak();
$khansa->ambil(5000);
$khansa->cetak();
$khansa->nabung(10000000);
$khansa->cetak();