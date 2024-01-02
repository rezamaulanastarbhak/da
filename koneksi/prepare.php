<?php
require_once "koneksi.php";
$conn = getConnection();
$user = "user";
$pass = "user";
// $sql = "select * from admin where username = :user and password = :pass";
$sql = "select * from admin where username = ? and password = ?";
$statement = $conn->prepare($sql);
// $statement->bindParam("user", $user);
// $statement->bindParam("pass", $pass);
// $statement->bindParam(1, $user);
// $statement->bindParam(2, $pass);
$statement->execute([$user,$pass]);

if ($row = $statement->fetch()){
    echo "login sukses :  ".$row['username'] ;
}else {
    echo "login gagal";
}
