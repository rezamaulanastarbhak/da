<?php
require_once "koneksi.php";
$conn = getConnection();

$sql = "select * from barang";
$result = $conn->query($sql);
$barang = $result->fetchAll();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CRUD App</title>
</head>
<body>
    <h2>Data Users</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Harga</th>
            <th>Keterangan</th>
            <th>Jenis</th>
            <th>aksi</th>
        </tr>
        <?php foreach ($barang as $r): ?>
            <tr>
                <td><?= $r['id']; ?></td>
                <td><?= $r['nama_barang']; ?></td>
                <td><?= $r['Harga']; ?></td>
                <td><?= $r['Keterangan']; ?></td>
                <td><?= $r['jenis']; ?></td>
                <td>
                <a href="update.php?id=<?= $r['id']; ?>">Edit</a>|
                <a href="delete.php?id=<?= $r['id']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
