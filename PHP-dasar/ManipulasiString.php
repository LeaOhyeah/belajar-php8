<?php
// ** PHP_EOL (end of line) adalah konstant yang berfungsi seperti \n

echo "\n===== Dot Operator (menggabungkan string) =====\n";
// menambahkan string dengan data lain (sebenarnya bisa dengan + tetapi akan bermasalah jika terjadi type juggling)
$firstName = 'Lea';
$lastName = 'Alyu';
echo 'fullname is ' . $firstName . ' ' . $lastName . PHP_EOL;


echo "\n===== Konversi Data =====\n";
// string ke numeric atau sebaliknya, dengan (tipe data)data;
// jika data string tidak valid maka akan menjadi 0
$toString = (string)100;
var_dump($toString);

$toInt = (int)$toString;
var_dump($toInt);

$toFloat = (float)'data';
var_dump($toFloat);


echo "\n===== Mengakses karakter di dalam string =====\n";
// string di PHP seperti array yang dapat di akses karakter menggunakan []
// jika mengakses index yang tidak ada maka terjadi error

$string = 'Lea';
echo $string[1];
echo $string[2];


echo "\n===== Variable parsing =====\n";
// khusus string dengan double quote dan heredoc, variable dapat diakses dengan $
// ini memudahkan menggabungkan string dengan variable, sebelumya kita menggunakan titik
$name = 'User';
echo "Welcome $name, have fun" . PHP_EOL;


echo "\n===== Variable parsing curly brace =====\n";
// kadang kita butuh menggabungkan string tanpa spasi, contoh Welcome $names, 
// hal ini dapat dilakukan dengan curly brance 
echo "Welcome {$name}s, have fun" . PHP_EOL;