<?php
include 'koneksi.php';
$conn = getConnection();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $stmt = $conn->prepare("DELETE FROM barang WHERE id = ?");
    $stmt->execute([$id]);

    header('Location: tampil.php');
} else {
    header('Location: tampil.php');
}