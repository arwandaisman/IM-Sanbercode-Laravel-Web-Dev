<?php

class Animal
{
    public $name = "shaun";
    public $legs = 4;
    public $cold_blooded ="no";
    public $sheep;

    public function __construct($nama)
    {
        $this->sheep = $nama;
        
    }
}
