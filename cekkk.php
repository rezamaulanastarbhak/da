<?php
class Fruits
{
    var $name = "apel";

    function hello(){
        echo "hello, $this->name";
    }
}

$fruit1 = new Fruits();
echo "{$fruit1->name}"; //apel
$fruit1->hello("belimbing"); //hello belimbing
$fruit1->hello(); //helo, apel