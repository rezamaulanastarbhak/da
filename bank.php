<?php
class Bank {
    //properti (variabel)
    protected $no_rek;
    public $nama;
    private $saldo;
    static $jml = 0;
    const BANK = "Bank CCIT";

    //method konstruktor
    public function __construct($no, $nama, $saldo)
    {
        $this->no_rek = $no;
        $this->nama = $nama;
        $this->saldo = $saldo;
    }

    //method nabung 
    public function nabung($uang){
        $this->saldo += $uang;
    }

     //method ambil 
     public function ambil($uang){
        $this->saldo -= $uang;
    }

    //method cetak
    public function cetak(){
        echo '<b><u>'.self::BANK.'</u></b>';
        echo '<br/>No. Rekening :'.$this->no_rek;
        echo '<br/>Nama Nasabah :'.$this->nama;
        echo '<br/>Saldo : Rp. '.number_format($this->saldo,0, ',', '.');
        echo '<hr/>';
    }

}

//objek 
