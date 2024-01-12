<?php
require_once 'ProductRepository.php';
require_once 'ProductRepositoryInterface.php';

$host = 'localhost';
$db   = 'test';
$user = 'root';
$pass = '';

try {
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo 'koneksi sukses';
} catch (PDOException $e) {
    echo 'Koneksi gagal: ' . $e->getMessage();
}

// Dependency injection ProductRepository
$productRepository = new ProductRepository($conn);
