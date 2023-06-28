<?php
// Anonymous function pada PHP juga disebut Closure (berbeda dengan bahasa pemrograman lain)
// ini biasanya digunakan sebagai argument atau value sebuah variable
// ini membuat kita bisa mengirim function sebagai argument di function lainnya



echo "\n===== Anonymous Function in Variable =====\n";
$sayHello = function ($name) {
     echo "Hello " . $name . PHP_EOL;
}; // menggunakan semicolon karena termasuk statement saat membuat variable

$sayHello('Lea');


echo "\n===== Anonymous Function in Argument =====\n";
function sayGoodBye(string $name, $filter)
{
     $finalName = $filter($name);
     echo "Good bye $finalName" . PHP_EOL;
}

sayGoodBye("Lea", function (string $name) {
     return strtoupper($name);
});


echo "\n===== Anonymous Function in Variable as Argument  =====\n";
$sayGoodBye = function (string $name) {
     return strtoupper($name);
};

sayGoodBye("Lia", $sayGoodBye);


echo "\n===== Mengakses Variable di Luar =====\n";
// Secara default function tidak bisa mengakses variable di luar closure
// namun jika ingin kita perlu menggunakan kata kunci use diikuti variable tersebut
// use ($data)

$firstName = 'Lea';
$lastName = 'Alyu';

$functionSayHello = function () use ($firstName, $lastName) {
     echo "Hello $firstName $lastName" . PHP_EOL;
};

$firstName = 'Bukan Lea';
$functionSayHello();