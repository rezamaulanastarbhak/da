<?php
function hai($nama, $jurusan = "tidak pilih") {
    echo "hello CCIT, saya adalah $nama <br>";
    echo "saya adalah jurusan $jurusan <br>";
    echo "========================= <br>";
}
$name = "Ikram";
$name = "Iqbal";
hai($name,);
hai("Damar", "IoT");

function tambah($bil1, $bil2){
    echo $bil1 + $bil2 ."<br>";
}

tambah(1,1);
tambah(10,19);

function luasPersegi($sisi){
    echo $sisi*$sisi."<br>";
}

luasPersegi(5);

function pangkat($a, $b){
    return $a**$b;
}

echo pangkat(2,3);
echo "<br>";


//1. buat function untuk menampilkan profile
//profil (nama, alamat, gender, hoby, makanan favorit)
// buat default value untuk hoby = coding 

//2. buat function untuk menghitung berat badan ideal 
// jika laki-laki rumusnya 22.9 * (tinggi (dalam meter)**2)
// jika wanita rumusnya 22.7 * (tinggi(dalam meter)**2)
// bbi($jekel, $tinggi)
function bbi($jekel,$tinggi){
    $konv_tinggi = $tinggi/100;
    
    if ($jekel== "pria") {
        $bmi = 22.9 * ($konv_tinggi**2);
    }else{
        $bmi = 22.7 * ($konv_tinggi**2);
    }
    return $bmi;
}
echo bbi("pria",183);
echo "<br>";
//3. buat function untuk memisahkan bilangan ganjil dan genap
// $bil = [12,15,10,15,57,74,67,89,56,11,9,3]
// ganjilgenap($bil)
function ganjilgenap($bil){
    $ganjil = [];
    $genap = [];
    foreach ($bil as $angka){
        if ($angka % 2 == 0){
            $genap[] = $angka;
        }else{
            $ganjil[] = $angka;
        }
    }
    return ['ganjil'=>$ganjil, 'genap'=>$genap];
}
$data = [12,15,10,15,57,74,67,89,56,11,9,3];
$pisah = ganjilgenap($data);
print_r ($pisah['ganjil']);
echo "<br>";
print_r ($pisah['genap']);

