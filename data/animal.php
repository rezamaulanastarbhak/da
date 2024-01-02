<?php

class Animal
{
    //properti
    private string $nama;
    private string $jenis;
    private string $lingkungan;

    // konstruktor
    public function __construct(string $nama, string $jenis, string $lingkungan)
    {
        $this->nama = $nama;
        $this->jenis = $jenis;
        $this->lingkungan = $lingkungan;
    }

    public function cetak(){
        echo "nama  :".$this->nama."<br>";
        echo "jenis :".$this->jenis."<br>";
        echo "hidup di :".$this->lingkungan."<br>";
    }

    function suara(){
        if ($this->nama == "kucing"){
            echo "meoow";
        }elseif($this->nama == "anjing"){
            echo "ggoookgoook";
        }elseif($this->nama == "ayam"){
            echo "kokok";
        }
    }
}

class Kambing extends Animal{

}


$h1 = new Kambing();