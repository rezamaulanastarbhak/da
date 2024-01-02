<?php
require_once "data/people.php";
class Dosen extends People{
    //properti kelas turununan
    public $no_dosen;
    public $gelar;

    //konstruk kelas turunan 
    public function __construct($nama, $gender, $no_dosen, $gelar)
    {
        parent::__construct($nama, $gender);
        $this->no_dosen = $no_dosen;
        $this->gelar = $gelar;
    }

    //method turunan 
    public function cetak(){
        parent::cetak();
        echo "No. Dosen : ". $this->no_dosen . "<br>";
        echo "Gelar     : ". $this->gelar ." <br><hr>";
    }
}

class Mahasiswa extends People{
    
}

