<?php
include 'koneksi.php';
$conn = getConnection();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $harga = $_POST['harga'];
    $ket = $_POST['ket'];
    $jenis = $_POST['jenis'];

    $stmt = $conn->prepare("UPDATE barang SET nama_barang = ?, Harga = ?, Keterangan = ?, Jenis = ? WHERE id = ?");
    $stmt->execute([$name, $harga, $ket, $jenis, $id]);

    header('Location: tampil.php');
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $stmt = $conn->prepare("SELECT * FROM barang WHERE id = ? ");
    $stmt->execute([$id]);
    $barang = $stmt->fetch();

} else {
    header('Location: tampil.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit User</title>
</head>
<body>
    <h2>Edit User</h2>
    <form method="post" action="">
        <input type="hidden" name="id" value="<?= $barang['id']; ?>">

        <label for="name">Nama Barang:</label>
        <input type="text" name="name" value="<?= $barang['nama_barang']; ?>" required><br>

        <label for="harga">Harga Barang:</label>
        <input type="number" name="harga" value="<?= $barang['Harga']; ?>" required><br>

        <label for="ket">Keterangan:</label>
        <input type="text" name="ket" value="<?= $barang['Keterangan']; ?>" required><br>

        <label for="jenis">Jenis</label>
        <input type="jenis" name="jenis" value="<?= $barang['jenis']; ?>" required><br>

        <button type="submit">Update</button>
    </form>
</body>
</html>
