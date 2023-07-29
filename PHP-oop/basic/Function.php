<?php
require_once "data/Account.php";


echo "\n===== Functions =====\n";
// untuk mengakses function didalam class bida dengan ->namaFunction()

$account = new Account();
$account->sayHello("Lia");     


echo "\n===== This keyword =====\n";
// this digunakan untuk mengakses object saat ini dalam sebuah class
// kadang kita butuh mengakses property atau function lain ketika didalam class itu sendiri

$account->name = 'Lea Alyu';
$account->sayGoodbye();
$account->sayHello('Lea');

