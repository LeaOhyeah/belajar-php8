<?php
require_once "data\Car.php";

use Data\Avanza;

echo "\n===== Interface =====\n";
$car = new Avanza();
$car->drive();
$car->getTire();