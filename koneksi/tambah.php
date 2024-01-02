<?php
require_once "koneksi.php";
$conn = getConnection();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $harga = $_POST['harga'];
    $ket = $_POST['ket'];
    $jenis = $_POST['jenis'];

    $stmt = $conn->prepare("INSERT INTO barang (nama_barang, Harga, Keterangan, Jenis) VALUES (?,?,?,?)");
    $stmt->execute([$name, $harga, $ket, $jenis]);

    header('Location: tampil.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Barang</title>
</head>
<body>
    <h2>Tambah Barang</h2>
    <form method="post" action="">
        <label for="name">Nama</label>
        <input type="text" name="name" required><br>

        <label for="harga">Harga</label>
        <input type="number" name="harga" required><br>

        <label for="ket">Keterangan</label>
        <input type="text" name="ket" required><br>

        <label for="jenis">Jenis</label>
        <input type="text" name="jenis" required><br>

        <button type="submit">Simpan</button>
    </form>
</body>
</html>
