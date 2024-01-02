<?php
require_once "koneksi.php";

$conn = getConnection();

$sql = <<<SQL
        INSERT INTO jenis(nama) 
        VALUES ("Pakaiaann")
SQL;
    
$conn->exec($sql);
   
