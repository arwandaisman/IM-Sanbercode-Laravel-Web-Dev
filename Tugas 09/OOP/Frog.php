<?php

require_once 'Animal.php';

class Frog extends Animal
{
    public $name = "Buduk";
    public $legs = 4;
    public $cold_blooded ="no";

    public function Jump(){
        return "Hop Hop";
    }


}
