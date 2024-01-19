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


    public function create($data)
    {
        $stmt = $this->conn->prepare("INSERT INTO users (username, password, role) VALUES (?, ?, ?)");
        $stmt->execute([$data['username'], $data['password'], $data['role']]);
        
    }



    public function getUsername($username)
    {
        $stmt = $this->conn->prepare("SELECT * FROM users WHERE username = ?");
        $stmt->execute([$username]);
        return $stmt->fetch(PDO::FETCH_ASSOC);

    }
}


