<?php
require_once "data\Category.php";

use Category\Category;


echo "\n===== Encapsulation (getter & setter) =====\n";
$category = new Category();
// $category->name = "Handphone"; // error cannot access private properties
// echo $category->name; // error cannot access
$category->setName("Handphone");
$category->setExpensive(true);

echo "Name : " . $category->getName() . PHP_EOL;
echo "Exponsive : " . $category->isExpensive() . PHP_EOL;

echo "\n===== Validation In Encapsulation =====\n";
// untuk menjaga data tetap valid kita bisa membuat validasi pada setter
$category->setName("  ");
echo "Name : " . $category->getName() . PHP_EOL;