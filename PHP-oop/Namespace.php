<?php

require_once "data\Conflict.php";
require_once "data\Helper.php";

echo "\n===== Namespace =====\n";

$conflict1 = new \Data\One\Conflict();
$conflict2 = new \Data\Two\Conflict();

var_dump($conflict1);
var_dump($conflict2);


echo "\n===== Function and Constant in Namespace =====\n";
// cara menggunakan function dan constant didalam namespace dengan menyebutkan namespace nya 

Helper\helpMe();
echo Helper\APP . PHP_EOL;


echo "\n===== Global Namespace =====\n";
// secara default kode PHP disimpan dalam global namespace tanpa nama
// namespace {
//      kode PHP
// }


