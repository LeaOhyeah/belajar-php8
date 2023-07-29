<?php

require_once "data\Conflict.php";
require_once "data\Helper.php";

echo "\n===== Namespace =====\n";
// saat membuat aplikasi pasti kita membuat banyak class, 
// jika terlalu banyak kadang menyulitkan untuk mencari dan mengklasifikasikannya
// PHP memiliki fitur namespace (untuk menyimpan class bukan file) dan bisa nested
// jika ingin mengakses class didalam namespace kita perlu menyebutkan nama namespace nya
// namespace bagus ketika kita memiliki class dengan nama yang sama agar tidak terjadi error

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


