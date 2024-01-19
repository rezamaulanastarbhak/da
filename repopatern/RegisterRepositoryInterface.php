<?php
//require_once 'koneksi.php';

interface RegisterRepositoryInterface
{
    //untuk menambahkan user 
    public function create($data);
    //untuk cek login
    public function getUsername($username);
}