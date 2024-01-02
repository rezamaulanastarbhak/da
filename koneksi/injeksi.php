<?php
require_once "koneksi.php";
$conn = getConnection();
$user = $conn->quote("admin';#");
$pass = $conn->quote("user");
$sql = "select * from admin where username = $user and password = $pass;";
$statement = $conn->query($sql);
echo $sql;
$succes = false;
foreach ($statement as $row){
    $succes = true;
}
if ($succes){
    echo "login sukses";
}else {
    echo "login gagal";
}
