<?php

require_once 'Animal.php';

class Ape extends Animal
{
    public $name = "Kera Sakti";
    public $legs = 2;
    public $cold_blooded ="no";

    public function yell(){
        return "Auooo";
    }


}
