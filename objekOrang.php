<?php
require_once 'orang.php';
require_once 'siswa.php';

$p1 = new Person('danu','L');
$p1->cetak();


$s1 = new Siswa('Dodi', 'L', '10002','RPL bgt');
$s1->cetak();