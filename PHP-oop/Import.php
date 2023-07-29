<?php

// use keyword untuk import
// sebelumnya kita menyebutkan nama namespace sebelum menggunakannya, jika terlalu sering maka kode terlau panjang
// hal ini bisa dihindari dengan import class, function atau constant nya
// use namespaceName;
// use function namespaceName\function;
// use const namespaceName\const;


require_once "data\Conflict.php";
require_once "data\Helper.php";

echo "\n===== Import =====\n";
// kita tidak bisa melakukan import pada nama class yang sama meski namespace nya berbeda
use \Data\One\Conflict;
use function \Helper\helpMe;
use const \Helper\APP;


$conflict1 = new Conflict();
$conflict2 = new \Data\Two\Conflict();

helpMe();
echo APP . PHP_EOL;
