<?php
//membuat fungsi define by user - return
function tambah($a, $b) {
    $c = $a + $b;
    return $c;
}

function kurang($a, $b) {
    $c = $a - $b;
    return $c;
}
//memanggil fungsi return
$x = 10;
$y = 20;
echo 'Hasil 50 + 30 = '.tambah(50,30);
echo "<br/>Hasil $x + $y = ". tambah($x,$y);
echo '<br/>Hasil 50 - 30 = '.kurang(50,30);
?>
