<?php
require_once("animal.php");
require_once("Frog.php");
require_once("Ape.php");

$sheep = new Animal("shaun");

echo "name : " . $sheep->name. "<br>"; // "shaun"
echo "legs : " . $sheep->legs. "<br>"; // 4
echo "cold_blooded : " . $sheep->cold_blooded. "<br>"; // "no"

echo "-------------------------------------- <br>";

$Frog = new Frog("Buduk");
echo "name : " . $sheep->name. "<br>"; // "shaun"
echo "legs : " . $sheep->legs. "<br>"; // 4
echo "cold_blooded : " . $sheep->cold_blooded. "<br>"; // "no"
echo "Jump : " . $Frog->Jump(). "<br>";

echo "-------------------------------------- <br>";


$Ape = new Ape("Kera Sakti");
echo "name : " . $sheep->name. "<br>"; // "shaun"
echo "legs : " . $sheep->legs. "<br>"; // 4
echo "cold_blooded : " . $sheep->cold_blooded. "<br>"; // "no"
echo "Yell : " . $Ape->yell(). "<br>";







