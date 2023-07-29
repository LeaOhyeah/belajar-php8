<?php

require_once "data/Manager.php";

echo "\n===== Object =====\n";
$manager = new Manager("Lea");
$manager->sayHello("User");

$vicePresident = new VicePresident("Lia");
$vicePresident->sayHello("User");

$vicePresident->sayHi();
$vicePresident->sayHiParent();