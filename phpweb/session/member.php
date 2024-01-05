<?php
session_start();

if($_SESSION['login'] != true){
    header('Location: /test/phpweb/session/login.php');
    exit();
}

$say = "Hello " . $_SESSION['username'];
?>

<html>
<body>
<h1><?= $say ?></h1>
<a href="/test/phpweb/session/logout.php">Logout</a>
</body>
</html>