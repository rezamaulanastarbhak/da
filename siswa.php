<?php
require_once 'orang.php';
class Siswa extends Person{
    //properti
    public $nis;
    public $kelas;

    //konstruktornya 
    public function __construct($nama, $gender, $nis, $kelas)
    {
        parent::__construct($nama,$gender);
        $this->nis = $nis;
        $this->kelas = $kelas;
    }
    //method cetak
    public function cetak(){
        parent::cetak();
        echo '<br> nis '.$this->nis;
        echo '<br> kelas '.$this->kelas;
    }
}