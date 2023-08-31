<?php

require_once "helper/Validation.php";
require_once "data/Data.php";

echo "\n===== Studi kasus =====\n";
$user = new Pengguna();
$user->username = "";

try {
     ValidationFunction::validateReflection($user);
} catch (\Throwable $th) {
     echo "Error {$th->getMessage()}" . PHP_EOL;
}


$product = new Produk();

try {
     ValidationFunction::validateReflection($product);
} catch (\Throwable $th) {
     echo "Error {$th->getMessage()}" . PHP_EOL;
}


$product = new Binatang();

try {
     ValidationFunction::validateReflection($product);
} catch (\Throwable $th) {
     echo "Error {$th->getMessage()}" . PHP_EOL;
}