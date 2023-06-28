<?php
// PHP memiliki banyak function dengan prefix is yang rata-rata untuk mengecek variable dan return boolean
// dokumentasi lengkap https://www.php.net/manual/en/ref.var.php



echo "\n===== Yang sering digunakan =====\n";
$dataString = "Hello, world";
$dataBool = true;
$dataInteger = 1;
$dataFloat = 1.5;
$dataArray = array(1, 2, 3, 4, 5, );
$dataNull = null;

var_dump(is_string($dataString));
var_dump(is_bool($dataBool));
var_dump(is_integer($dataInteger));
var_dump(is_float($dataFloat));
var_dump(is_array($dataArray));
var_dump(is_null($dataNull));