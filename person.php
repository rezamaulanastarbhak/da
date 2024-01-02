<?php

//class parent
class Person {
    //properti 
    public $nama;
    public $gender;
    
    //konstruktor 
    public function __construct($nama, $gender)
    {
        $this->nama = $nama;
        $this->gender = $gender;
    }

    //method cetak 
    public function cetak(){
        echo "Nama adalah ".$this->nama;
        echo "<br>Jenis Kelamin adalah ".$this->gender;
    }
}
//class child
class Dosen extends Person{
    //properti
    public $gelar;
    public $jabatan;

    //konstruktor
    public function __construct($nama,$gender,$gelar,$jabatan)
    {
        parent::__construct($nama,$gender);
        $this->gelar = $gelar;
        $this->jabatan = $jabatan;
    }

    //method cetak 
    public function cetakDosen(){
        parent::cetak();
        echo "<br> gelar saya adalah ".$this->gelar;
        echo "<br> jabatan saya adalah ".$this->jabatan;
        echo "<hr>";
    }
}


// $p1 = new Person("rafli","laki-laki");
// $p1->cetak();

$p2 = new Dosen("Bayu","Laki - laki", "Sarjana Komputer","kepala lab");
$p2->cetakDosen();

