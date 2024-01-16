<?php
//require_once 'koneksi.php';

interface JenisRepositoryInterface
{
    //menampilkan (READ)
    public function getAll();
    //menampilkan id yang mau di edit
    public function getById($id);
    //insert data (Create)
    public function create($data);
    //update data (Update)
    public function update($id, $data);
    //delate data
    public function delete($id);
}