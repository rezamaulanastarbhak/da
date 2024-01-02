<?php

class Person{
    //propoerti
    private $nama;
    public $gender;
    
    //method
    public function __construct($nama, $gender)
    {
        $this->nama = $nama;
        $this->gender = $gender;
    }
    //method cetak
    public function cetak(){
        echo 'Nama '.$this->nama;
        echo '<br> gender '.$this->gender;
    }
}

