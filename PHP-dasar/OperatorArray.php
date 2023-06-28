<?php
// pada PHP array memiliki operator khusus, yang cara kerjanya berbeda dari operator-operator sebelumnya
// lebih umum digunakan pada array map, (note * untuk map)

$array2 = ['1', '2', '3', '4', '5',];
$array1 = [5, 1, 2, 3, 4,];

$map1 = [
     'id' => '1',
     'name' => 'Lea',
     'age' => 19,
];
$map2 = [
     'id' => '1',
     'age' => 19,
     'name' => 'Lea',
];

echo "\n===== Union (menggabung array) =====\n";
// key unique dan priority pada data pertama*
var_dump($array1 + $array2);
var_dump($map1 + $map2);

echo "\n===== Equality (seperti sama dengan / mengabaikan posisi*) =====\n";
var_dump($array1 == $array2);
var_dump($map1 == $map2);

echo "\n===== Identity (seperti identik) =====\n";
var_dump($array1 === $array2);
var_dump($map1 === $map2);

echo "\n===== Inequality (seperti tidak sama dengan) =====\n";
var_dump($array1 != $array2);
var_dump($map1 != $map2);

echo "\n===== Nonidentity (seperti tidak identik) =====\n";
var_dump($array1 !== $array2);
var_dump($map1 !== $map2);