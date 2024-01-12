<?php
require_once 'koneksi.php';
require_once 'ProductRepository.php';
require_once 'ProductRepositoryInterface.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $data = [
        'name' => $_POST['name'],
        'description' => $_POST['description'],
        'price' => $_POST['price'],
        'image_path' => 'uploads/' . $_FILES['image']['name']
    ];
    move_uploaded_file($_FILES['image']['tmp_name'], $data['image_path']);


    $productRepository->update($id, $data);
    header('Location: index.php');
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $product = $productRepository->getById($id);
} else {
    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Produk</title>
</head>
<body>
    <h2>edit data produk</h2>
    <form method="post" action="" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $product['id']; ?>">

    
        <label for="name">Nama:</label>
        <input type="text" name="name" value="<?= $product['name'] ;?>"><br>

        <label for="description">Deskripsi:</label>
        <textarea name="description"> <?= $product['description'] ;?> </textarea><br>

        <label for="price">Harga:</label>
        <input type="text" name="price" value="<?= $product['price'] ;?>"><br>

        <label for="image">Gambar:</label>
        <input type="file" name="image"><br>
        <?php if ($product['image_path']): ?>
        <img src="<?= $product['image_path'] ?>" alt="Product Image" style="max-width: 200px;"><br>
        <?php endif; ?>
        <button type="submit">update</button>
    </form>
</body>
</html>