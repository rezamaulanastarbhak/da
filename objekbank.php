<?php
require 'bank.php';
$n1 = new Bank('001','rafli','1000000');
$n1->cetak();
$n1->nabung(50000);
$n1->cetak();
$n1->ambil(750000);
$n1->cetak();
$n2 = new Bank('002', 'Messi', 2000000000);
$n2->cetak();