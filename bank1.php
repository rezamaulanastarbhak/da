<?php
class Bank{
    //properti 
    protected $norek;
    public $nama;
    private $saldo;
    static $jml = 0;
    const namaBank = "Bank Penus";
    //method
    public function __construct($norek, $nama, $saldo)
    {
        $this->norek = $norek;
        $this->nama = $nama;
        $this->saldo = $saldo;
        self::$jml++;
    }
    // method menabung 
    public function nabung($uang){
        $this->saldo += $uang;
       // $this->saldo + $uang = $this->saldo;
    }
    public function tarik($uang){
        $this->saldo -= $uang;
    }
    //method
    public function cetak(){
        echo '<b><u>'.self::namaBank.'</u></b>';
        echo '<br/>No. Rekening :'.$this->norek;
        echo '<br/>Nama Nasabah :'.$this->nama;
        echo '<br/>Saldo : Rp. '.number_format($this->saldo,0, ',', '.');
        echo '<hr/>';
    }
}

$nasabah1 = new Bank('100001','NurRohman',5000000);
$nasabah1->cetak();
$nasabah1->tarik(4000000);
$nasabah1->cetak();

$nasabah2 = new Bank('100002','Ipal',500000);
$nasabah2->cetak();
