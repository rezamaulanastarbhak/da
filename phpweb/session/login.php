<?php
//memulai sesion
session_start();

if($_SESSION['login'] == true){
    header('Location: /test/phpweb/session/member.php');
    exit();
}

$error = "";
if($_SERVER['REQUEST_METHOD'] == "POST"){
    if($_POST['username'] == 'reza' && $_POST['password'] == 'reza'){
        // sukses
        $_SESSION['login'] = true;
        $_SESSION['username'] = 'reza';
        header('Location: /test/phpweb/session/member.php');
        exit();
    }else{
        // gagal
        $error = "Login Gagal";
    }
}

?>

<html>
<body>
<?php if($error != ""){ ?>
    <h2><?= $error ?></h2>
<?php } ?>
<h1>Login</h1>
<form action="/test/phpweb/session/login.php" method="post">
    <label>Username :
        <input type="text" name="username">
    </label>
    <br/>
    <label>Password :
        <input type="password" name="password">
    </label>
    <br/>
    <input type="submit" value="Login">
</form>
</body>
</html>