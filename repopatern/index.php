<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

require_once 'koneksi.php';
require_once 'ProductRepository.php';
require_once 'ProductRepositoryInterface.php';


$products = $productRepository->getAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CRUD Produk</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        img {
            max-width: 100px;
            max-height: 100px;
        }
    </style>
</head>
<body>
    <h2>Data Produk</h2>
    <a href="add.php">Tambah Produk</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Deskripsi</th>
            <th>Harga</th>
            <th>Gambar</th>
            <th>Aksi</th>
        </tr>
        <?php $no = 1; ?>
        <?php foreach ($products as $product): ?>
            <tr>
                <td><?= $no++; ?></td>
                <!-- <td><?= $product['id']; ?></td> -->
                <td><?= $product['name']; ?></td>
                <td><?= $product['description']; ?></td>
                <td><?= $product['price']; ?></td>
                <td><img src="<?= $product['image_path']; ?>" alt="Product Image"></td>
                <td>
                    <a href="edit.php?id=<?= $product['id']; ?>">Edit</a> |
                    <a href="delete.php?id=<?= $product['id']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">Hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
