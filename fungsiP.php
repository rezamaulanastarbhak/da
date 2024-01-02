<?php
//pendeklarasian fungsi
function hello(){
    echo "hello nama saya adalah Lord";
    echo "<br>Alamat saya di Cibinong";
    echo "<br>kegiatan saya adalah siswa";
}
//memanggil fungsi 
hello();

//fungsi dengan parameter
function biodata($nama, $alamat){
    echo "<br><br>hello nama saya adalah ".$nama;
    echo "<br> alamat saya adalah di ".$alamat;
}

//memanggil fungsi dengan parameter
biodata("Lord Reno", "kebon kosong");
biodata("hamid", "pinggir sungai");

//fungsi dengan nilai pengembalian / return
function tambah($bil1,$bil2){
    echo "<br>";
    $hasil = $bil1 + $bil2;
    return $hasil;
}
//panggil function
echo tambah(4,7);