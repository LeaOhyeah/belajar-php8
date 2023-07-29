<?php
require_once "data\Say.php";

use Data\Traits\{Person};

echo "\n===== Trait =====\n";
$person = new Person();
echo $person->goodBye('Cecep');
echo $person->hello('Udin');
$person->name = 'Lea';   
var_dump($person);