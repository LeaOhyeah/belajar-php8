<?php

require_once "data\Animal.php";
use Animal\{Animal, Cat, Dog};

echo "\n===== Abstract Function =====\n";
$cat = new Cat();
$cat->name = 'Bob';
$dog = new Dog();
$dog->name = 'Bib';

$cat->run();
$dog->run();