<?php

echo "reza";
$a = 1;
$a = $a + 1; //
$b = 5;
$c = $a + $b;
$d = $b % $a; // sisa bagi 5 : 1 = 5 
echo "<br>";

$a += $b; // a = a + b = 6
echo $a;
echo "<br>";

$b -= $a; // b = b - a = 5 - 6
echo $b;
echo "<br>";

$c *= $b; // c = c * b = 6 * -1 = -6
echo $c;
echo "<br>";

$nilai = 80 < 70;
$nilai = 100 !== "100";
$nilai = $c <= 80;

$x = 10;
$y = ++$x; // 11
$y = --$y; // 10
var_dump($y);

$nilai = 100;
$absen = 70;

if ($nilai >= 75 && $absen >= 75){
    echo "Anda Lulus";
}else{
    echo "Anda Gagal";
}








