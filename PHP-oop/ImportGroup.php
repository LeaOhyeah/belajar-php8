<?php
// kadang kita butuh melakukan import banyak hal dalam satu namespace, PHP memiliki fitur grup use untuk melakukannya
// untuk melakukannya dengan use namespace{clas/function/constant} 


require_once "data\Conflict.php";
require_once "data\Helper.php";

echo "\n===== Import Group =====\n";
use \Data\One\{Conflict as Conflict1, Other, Dumy};
use \Data\Two\Conflict as Conflict2;
use const \Helper\{APP as APPLICATION};
use function \Helper\{helpMe as help};

echo "\n===== Import Biasa =====\n";
// use function \Helper\helpMe as help;
// use const \Helper\APP as APPLICATION;


echo "\n===== Penggunaan =====\n";
$conflict1 = new Conflict1();
$conflict2 = new Conflict2();
$Other = new Other();
$Other = new Dumy();

help();
echo APPLICATION . PHP_EOL;