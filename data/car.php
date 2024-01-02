<?php

class Carr
{
//   properti
    var string $name;
    var ?string $brand = null;
    var string $color = "hitam";

    // method
    function say(){
        echo "hello $this->name";
    }
}
