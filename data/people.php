<?php
class People {
    //properti class induk
    public $nama;
    public $gender;

    //konstruktor kelas induk 
    public function __construct(string $nama,string $gender)
    {
        $this->nama = $nama;
        $this->gender = $gender;
    }

    //method kelas induk
    public function cetak(){
        echo "nama : ".$this->nama."<br>";
        echo "jenis kelamin : ".$this->gender."<br>";
    }
}