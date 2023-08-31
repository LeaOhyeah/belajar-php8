<?php
// adalah class kosong bawaan PHP yang digunakan untuk konversi tipe data objek
// misal array menjadi objek 
// ini juga dapat mengkonversi tipe data objek ke array (semua property menjadi data array (value) dan key)


echo "\n===== Array to Object =====\n";

$array = [
     'firstName' => 'Lea',
     'lastName' => 'Alyu',
     'username' => 'LeaOhyeah',
];

$object = (object) $array;
var_dump($object);

echo "First name: " . $object->firstName . PHP_EOL;
echo "Last name: " . $array['lastName'] . PHP_EOL;


echo "\n===== Object to Array =====\n";
$array2 = (array) $object;
var_dump($array2);