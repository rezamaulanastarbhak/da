<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h2>penjumlahan </h2>
   <form action="" method="post">
    <label for="angka1">angka pertama</label>
    <input type="text" name="angka1" required><br><br>
    <label for="angka2">angka kedua</label>
    <input type="text" name="angka2" required><br><br>
    <input type="submit" value="jumlah">
   </form> 
   <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $angka1 = $_POST["angka1"];
            $angka2 = $_POST["angka2"];
            $hasil = $angka1 + $angka2;
            echo "<h3>jadi hasil dari penjumlahan adalah $hasil</h3>";
        }
   ?>
</body>
</html>