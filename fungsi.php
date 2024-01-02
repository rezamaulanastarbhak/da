<?php


//mendeklarasikan fungsi
function salam(){
    echo "selamat siang mahasiswa";
}
//pemanggilan fungsi
salam();

//pendeklarasian fungsi dengan parameter
function sapa($kawan, $tempat, $kerja){
    echo "<br>hello selamat siang $kawan";
    echo "<br> saya tinggal di $tempat";
    echo "<br> saya kerja sebagai $kerja";
    echo "<br>=================================";
}
//pemanggilan fungsi dengan parameter 
sapa("rafli", "bekasi","web dev");
sapa("socha", "bogor", "programmmer");
sapa("kezia", "jaxel", "youtuber");

//fungsi dengan nilai return
function tambah($a, $b){
    $c = $a + $b;
    return $c;
}

$x = 10;
$y = 20;
echo "<br>hasil dari 5 + 6 adalah ".tambah(5, 6);
echo "<br>hasil dari $x + $y adalah ".tambah($x, $y);