<?php
require_once "data/User.php";


echo "\n===== Properties =====\n";
// field atau property yang ada pada Object bisa kita manipulasi dengan Object->namaField

$user = new User();
var_dump($user);

$user->name = "Lea";
$user->address = "Bojonegoro";
$user->country = "Indonesia";
$user->name = "Lia";
var_dump($user);

echo "Username is " . $user->name . PHP_EOL;
echo "User address is $user->address" . PHP_EOL;


echo "\n===== Properties Type Declaration =====\n";
// seperti function, di properties pun kita bisa melakukan type declaration. Ini membuat PHP otomatis mengecek tipe yang sesuai
// jika tidak sesuai atau kita merubahnya akan error (tapi type juggling tetap aman)
// caranya dengan var 'type' $variable
// (masuk kembali ke data/User.php)

$user = new User();
// $user->name = [];


echo "\n===== Default Properties Value =====\n";
// sama seperti variable, di property kita juga bisa mengisi langsung nilainya.
// ini mirip default value pada parameter jika argument tidak dikirim
// pada property jika property tidak diubah / tidak di inisialisasi
// (masuk kembali ke data/User.php)

$lea = new User();
$lea->name = 'Lea';
$lea->address = 'Bojonegoro';
var_dump($lea);


echo "\n===== Nullable Properties  =====\n";
// saat menambahkan type declaration tentu kita tidak bisa memasukkan data null, karena merupakan data yang berbeda
// di PHP 7.4 diperkenalkan nullable type, jadi kita bisa mengirim data null sebagai nilai property
// var ?type $var;

