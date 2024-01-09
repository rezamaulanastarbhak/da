<?php
 if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $name = $_FILES['upload']['name'];
    $size = $_FILES['upload']['size'];
    $type = $_FILES['upload']['type'];
    $tmp = $_FILES['upload']['tmp_name'];
    $error = $_FILES['upload']['error'];
    //$target =  '/Applications/XAMPP/xamppfiles/htdocs/test/phpweb/file/';
    $target = __DIR__ . '/file/';

    move_uploaded_file($tmp, $target . $name);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == "POST"){
    ?>
    <table>
        <tr>
            <td>NAMA</td>
            <td><?= $name ?></td>
        </tr>
        <tr>
            <td>type</td>
            <td><?= $type ?></td>
        </tr>
        <tr>
            <td>size</td>
            <td><?= $size ?></td>
        </tr>
        <tr>
            <td>temporari dir</td>
            <td><?= $tmp ?></td>
        </tr>
        <tr>
            <td>error</td>
            <td><?= $error ?></td>
        </tr>
        <tr>
            <td>target direktori</td>
            <td><?= $target ?></td>
        </tr>
        <tr>
            <td>image</td>
            <td><img src='file/<?= $name ?>' alt='gambar'></td>
        </tr>
    </table>
    <?php } ?>
    <form action="" method="post" enctype="multipart/form-data">
    <label for="file"> FILE :
        <input type="file" name="upload" id="upload">
        <input type="submit" value="Submit">
    </label>

    </form>
</body>
</html>