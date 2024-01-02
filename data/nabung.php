<?php
class Nabung
{
    var string $nama;
    var string $no_rek;
    var int $saldo = 0;
    const bank = "bank ccit";
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
        echo '<b><u>'.self::bank.'</u></b>';
        echo '<br/>No. Rekening :'.$this->no_rek;
        echo '<br/>Nama Nasabah :'.$this->nama;
        echo '<br/>Saldo : Rp. '.number_format($this->saldo,0, ',', '.');
        echo '<hr/>';
    }

}