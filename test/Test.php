<?php

require_once "Main.php";

use \Data\TheClass\Main;


$data = new main();
$data->setPassword('password');
var_dump($data);
// $data2 = new Main();
// $data2->setPassword('password');
// var_dump($data2);
$reference = $data;
var_dump($reference);

$clone = clone $data;
var_dump($clone);

$data->setPassword('new password');
var_dump($reference);
var_dump($clone);

// echo ($data == $data2 ? 'OK' : 'ERROR') . PHP_EOL;
// echo ($data === $clone ? 'OK' : 'ERROR') . PHP_EOL;

// Main::main();