<?php

require_once 'person.php';

class Mahasiswa extends Person{
    //properti 
    public $nim;
    public $jurusan;
    public $semester;


    //konstruktor 
    public function __construct($nama, $gender, $nim, $jurusan, $semester)
    {
        parent::__construct($nama,$gender);
        $this->nim = $nim;
        $this->jurusan = $jurusan;
        $this->semester = $semester;
    }

    public function cetakMhs(){
        parent::cetak();
        echo "<br> nim saya adalah ".$this->nim;
        echo "<br> jurusan saya adalah ".$this->jurusan;
        echo "<br> semester saya adalah ".$this->semester;
    }
}

$m1 = new Mahasiswa("Socha", "Perempuan","0012", "web Desain","tiga");
$m1->cetakMhs();