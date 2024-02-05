<?php

require_once 'animal.php';
require_once 'frog.php';
require_once 'ape.php';

// Instance dari class Animal
$sheep = new Animal("shaun");
echo "name: ".$sheep->getName(). "<br>"; // Output: shaun
echo "legs: ".$sheep->getLegs() . "<br>";          // Output: 4
echo "cold blooded: ". $sheep->getcold_blooded() . "<br>";  // Output: no
echo "<br>";



// Instance dari class Frog
$kodok = new Frog("buduk");
echo "name: " . $kodok->getName(). "<br>";
echo "legs: " . $kodok->getLegs() . "<br>";
echo "cold blooded: " . $kodok->getcold_blooded() . "<br>";
echo "jump: " . $kodok->jump() . "<br>";
echo  "<br>";

// Instance dari class Ape
$sungokong = new Ape("kera sakti");
echo "name: " . $sungokong->getName() . "<br>";
echo "legs: " . $sungokong->getLegs() . "<br>";
echo "cold blooded: " . $sungokong->getcold_blooded() . "<br>";
echo "yell: " . $sungokong->yell() . "<br>";
echo  "<br>";
?>
