<?php
require_once 'koneksi.php';
require_once 'RegisterRepositoryInterface.php';

class RegisterRepository implements RegisterRepositoryInterface
{
    private $conn;

    public function __construct(PDO $conn)
    {
        $this->conn = $conn;
    }

    public function getAll()
    {
        $stmt = $this->conn->prepare("SELECT * FROM products");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id)
    {
        $stmt = $this->conn->prepare("SELECT * FROM products WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($data)
    {
        $stmt = $this->conn->prepare("INSERT INTO users (username, password, role) VALUES (?, ?, ?)");
        $stmt->execute([$data['username'], $data['password'], $data['role']]);
        // $stmt = $this->conn->prepare("INSERT INTO products (name, description, price, image_path) VALUES (:name, :description, :price, :image_path)");
        // $stmt->bindParam(':name', $data['name']);
        // $stmt->bindParam(':description', $data['description']);
        // $stmt->bindParam(':price', $data['price']);
        // $stmt->bindParam(':image_path', $data['image_path']);
        $stmt->execute();
    }

    public function update($id, $data)
    {
        $stmt = $this->conn->prepare("UPDATE products SET name = :name, description = :description, price = :price, image_path = :image_path WHERE id = :id");
        $stmt->bindParam(':name', $data['name']);
        $stmt->bindParam(':description', $data['description']);
        $stmt->bindParam(':price', $data['price']);
        $stmt->bindParam(':image_path', $data['image_path']);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }

    public function delete($id)
    {
        $stmt = $this->conn->prepare("DELETE FROM products WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }

    public function getUsername($username)
    {
        $stmt = $this->conn->prepare("SELECT * FROM users WHERE username = ?");
        $stmt->execute([$username]);
        return $stmt->fetch(PDO::FETCH_ASSOC);

    }
}


