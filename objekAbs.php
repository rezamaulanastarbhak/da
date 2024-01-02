<?php

require_once "kambing.php";
require_once "Anjing.php";
require_once "Kucing.php";

$h1 = new Kucing();
$h2 = new Kambing1();
$h3 = new Anjing();

$suaraHewan = [$h1,$h2,$h3];

foreach ($suaraHewan as $suara){
    echo "<br>".$suara->bersuara();
}
