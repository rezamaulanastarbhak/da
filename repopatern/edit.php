<?php
require_once 'koneksi.php';
require_once 'ProductRepository.php';
require_once 'ProductRepositoryInterface.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $data = [
        'name' => $_POST['name'],
        'description' => $_POST['description'],
        'price' => $_POST['price']
    ];

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
