<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = [
        'name' => $_POST['name'],
        'description' => $_POST['description'],
        'price' => $_POST['price'],
        'image_path' => 'uploads/' . $_FILES['image']['name']
    ];

    move_uploaded_file($_FILES['image']['tmp_name'], $data['image_path']);

    $productRepository->create($data);
    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Produk</title>
</head>
<body>
    <h2>Tambah Produk</h2>
    <form method="post" action="" enctype="multipart/form-data">
        <label for="name">Nama:</label>
        <input type="text" name="name" required><br>

        <label for="description">Deskripsi:</label>
        <textarea name="description" required></textarea><br>

        <label for="price">Harga:</label>
        <input type="text" name="price" required><br>

        <label for="image">Gambar:</label>
        <input type="file" name="image" required><br>

        <button type="submit">Simpan</button>
    </form>
</body>
</html>
