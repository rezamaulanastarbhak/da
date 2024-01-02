<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];

    $stmt = $conn->prepare("UPDATE users SET name = :name, email = :email, age = :age WHERE id = :id");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':age', $age);
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    header('Location: index.php');
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $stmt = $conn->prepare("SELECT * FROM users WHERE id = :id");
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
} else {
    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit User</title>
</head>
<body>
    <h2>Edit User</h2>
    <form method="post" action="">
        <input type="hidden" name="id" value="<?= $user['id']; ?>">

        <label for="name">Name:</label>
        <input type="text" name="name" value="<?= $user['name']; ?>" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" value="<?= $user['email']; ?>" required><br>

        <label for="age">Age:</label>
        <input type="number" name="age" value="<?= $user['age']; ?>" required><br>

        <button type="submit">Update</button>
    </form>
</body>
</html>
