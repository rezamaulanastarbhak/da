<?php
require_once "koneksi.php";
$conn = getConnection();

$sql = "select * from barang";
$result = $conn->query($sql);
$barang = $result->fetchAll();
$no = 1;
foreach ($barang as $r){
    echo $no++."<br>";
    echo $r['nama_barang']."<br>";
    echo $r['Harga']."<br>";
    echo $r['Keterangan']."<br>";
    echo $r['jenis']."<br>";
}

//var_dump($result);
//var_dump($barang);