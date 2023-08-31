<?php

require_once "data/AnimalShelter.php";
require_once "data/Food.php";


echo "\n===== Covariance =====\n";
$catShelter = new CatShelter();
$cat = $catShelter->adopt('udin');
$cat->run();

$dogShelter = new DogShelter();
$dog = $dogShelter->adopt('ucup');
$dog->run();


echo "\n===== Contravariance =====\n";
$food = new AnimalFood;
$dog->eat($food);