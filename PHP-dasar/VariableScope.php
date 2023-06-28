<?php
// Di PHP kita bisa membuat variable dimanapun
// scope variable adalah dibagian mana saja sebuah variable bisa diakses
// PHP memiliki 3 jenis  variable scope (global, local, static)



echo "\n===== Global =====\n";
// variable yang dibuat diluar function memiliki scope global
// variable ini hanya bisa diakses diluar function

// $name = "Lea";
// function sayName()
// {
//      return $name;
// }


echo "\n===== Local =====\n";
// variable yang dibuat didalam function memiliki scope local
// variable ini hanya bisa diakses didalam function itu sendiri

// function createName()
// {
//      $name = "Lea";
// }

// echo $name;


echo "\n===== Global Keyword =====\n";
// keyword global digunakan untuk mengakses variable dengan scope global kedalam function (yang sebelumnya tidak bisa)

$name = "Lia";

function sayName()
{
     global $name;
     return $name;
}
echo sayName();


echo PHP_EOL . '===== $GLOBALS variable =====' . PHP_EOL;
// selain menggunakan keyword global setiap variable yang dibuat secara global otomatis disimpan dalam array $GLOBAL oleh PHP
// var_dump($GLOBALS);

function sayNameAgain()
{
     return $GLOBALS["name"];
}
echo sayNameAgain();


echo "\n===== Static Scope =====\n";
// secara default local variable siklus hidupnya hanya sebatas function nya dieksekusi, 
// jika selesai dieksekusi maka siklusnya selesai
// saat membuat local variable menjadi static, maka siklusnya tidak akan berhenti ketika function selesai dieksekusi
// jika function tersebut dieksekusi lagi maka static variable memiliki value dari eksekusi sebelumnya
// (hanya untuk local variable)


echo "\n---- tanpa static ----\n";
function increment()
{
     $counter = 1;
     echo "Counter : " . $counter . PHP_EOL;
     $counter++;
}
increment();
increment();
increment();

echo "\n---- dengan static ----\n";
function staticIncrement()
{
     static $counter = 1; // jika sudah pernah dieksekusi maka akan memiliki nilai sebelumnya
     echo "Counter : " . $counter . PHP_EOL;
     $counter++;
}
staticIncrement();
staticIncrement();
staticIncrement();

