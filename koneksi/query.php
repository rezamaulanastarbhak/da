<?php
require_once "koneksi.php";
$conn = getConnection();
$sql = "select * from barang";
$result = $conn->query($sql);
$no = 1;
echo "<table border='1'>";
echo "<tr>";
echo "<th>No</th><th>Nama Barang</th><th>Harga</th><th>Keterangan</th><th>Jenis</th>";
echo "</tr>";
foreach ($result as $r){
    echo "<tr>";
    echo "<td>".$no++."</td>";
    echo "<td>".$r['nama_barang']."</td>";
    echo "<td>".$r['Harga']."</td>";
    echo "<td>".$r['Keterangan']."</td>";
    echo "<td>".$r['jenis']."</td>";
    echo "</tr>";
}
echo "</table>";
$conn = null;