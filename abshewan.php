<?php

abstract class Hewan {
    #method untuk turunannya
    abstract protected function bersuara();
}

class Burung extends Hewan {
    public function bersuara{
        echo "<br> bersuara ttuuuiiittt";
    }
}


$h3 = new Burung();

$lingkaran = new Lingkaran(13);
$persegiPanjang = new PersegiP(12, 10);
