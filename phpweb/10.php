<?php

if(isset($_GET['key']) && $_GET['key'] == 'rahasia'){
    header('Content-Disposition: attachment; filename="name.jpg"');
    header('Content-Type: image/jpeg');
    readfile(__DIR__ . '/file/tahu.jpeg');
    exit();
}else{
    echo "Invalid Key";
}