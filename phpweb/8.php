<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $target_dir = __DIR__ . '/file/';  // Direktori tujuan untuk menyimpan file
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);  // Nama file setelah di-upload
    $uploadOk = 1;  // Flag untuk menandakan apakah proses upload berhasil atau tidak
    echo $target_file;
    // Periksa apakah file yang diunggah adalah file gambar atau bukan
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            echo "File adalah gambar - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File bukan gambar.";
            $uploadOk = 0;
        }
    }

    // Periksa apakah file sudah ada di server
    if (file_exists($target_file)) {
        echo "Maaf, file sudah ada.";
        $uploadOk = 0;
    }

    // Periksa ukuran file
    if ($_FILES["fileToUpload"]["size"] > 500000) {
        echo "Maaf, ukuran file terlalu besar.";
        $uploadOk = 0;
    }

    // Proses upload jika semua syarat terpenuhi
    if ($uploadOk == 1) {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "File ". basename( $_FILES["fileToUpload"]["name"]). " berhasil diunggah.";
        } else {
            echo "Maaf, terjadi kesalahan saat mengunggah file.";
        }
    } else {
        echo "Maaf, file tidak diunggah.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Upload File</title>
</head>
<body>
    <h2>Form Upload File</h2>
    
    <form action="8.php" method="post" enctype="multipart/form-data">
        <label for="fileToUpload">Pilih File:</label>
        <input type="file" name="fileToUpload" id="fileToUpload" required>
        <br>

        <input type="submit" value="Upload" name="submit">
    </form>
</body>
</html>