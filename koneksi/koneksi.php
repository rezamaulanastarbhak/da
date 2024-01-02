<?php

function getConnection():PDO
{
    $host = "localhost"; //"ccit.com"
    $port = 3306;
    $db = "test";
    $user = "root";
    $pwd = "";

    return new PDO("mysql:host=$host:$port;dbname=$db",$user,$pwd);
}






