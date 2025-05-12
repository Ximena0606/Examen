<?php
require_once 'SportsPokemon.php';
require_once 'HomePokemon.php';
require_once 'SeaPokemon.php';
require_once 'CruisePokemon.php';

// SportsPokemon
$sports1 = new SportsPokemon("Pikachu", 23, 4, 1.2, 110);
$sports2 = new SportsPokemon("Bulbasa", 75, 2, 1.8, 120);

// HomePokemon
$home1 = new HomePokemon("Charman", 460, 2, 2.1, 14);
$home2 = new HomePokemon("Butterf", 36, 4, 1.2, 6);

// SeaPokemon
$sea1 = new SeaPokemon("Catterp", 45, 6);
$sea2 = new SeaPokemon("Weedle", 10, 4);

// CruisePokemon
$cruise1 = new CruisePokemon("Forxfire", 398, 8);
$cruise2 = new CruisePokemon("Pudding", 220, 6);

// Imprimir usando toString
echo $sports1 . "<br>";
echo $sports2 . "<br><br>";

echo $home1 . "<br>";
echo $home2 . "<br><br>";

echo $sea1 . "<br>";
echo $sea2 . "<br><br>";

echo $cruise1 . "<br>";
echo $cruise2 . "<br><br>";
?>
