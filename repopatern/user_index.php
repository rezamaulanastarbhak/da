<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

require_once 'koneksi.php';
require_once 'ProductRepository.php';
require_once 'ProductRepositoryInterface.php';


$products = $productRepository->joinAll();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <h1>Hello, <?= $_SESSION['username'] ?>!</h1>
    
    <div class="container-fluid">
        <div class="row justify-content-around">
            
    <?php foreach ($products as $product): ?>
        <div class="col">
        <div class="card" style="">
            <img src="<?= $product['image_path']; ?>" class="card-img-top" alt="<?= $product['name']; ?>">
            <div class="card-body">
            <h5 class="card-title"><?= $product['name']; ?></h5>
            <p class="card-text"><?= $product['description']; ?></p>
            <p class="card-text"><?= $product['price']; ?></p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
        </div>
        <?php endforeach; ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>