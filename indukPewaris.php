<?php
class Person {
    //member class 1 : variabel
    public $nama;
    public $gender;
    //member class 2 : konstruktor
    public function __construct($nama,$gender) {
        $this->nama = $nama;
        $this->gender = $gender;
    }
    //member class 3 : method / fungsi
    public function cetak() {
        echo 'Nama: '.$this->nama;
        echo '<br/>Jenis Kelamin: '.$this->gender;
    }
}
