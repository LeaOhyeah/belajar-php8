<?php
// sama seperti variable, argument bisa di isi data dinamis
// kadang dalam function kita hanya memperbolehkan tipe data tertentu, kita dapat menambahkan type
// secara default type juggling bisa dilakukan seperti pada variable
// valid type dalam argument dan parameter: 
// claas / interface, self (argument sama dengan class function dibuat), array, callable, bool (boolean) dan float (floating)
// int (integer), string, interable dan juga ada object
// disini tidak akan menjelaskan semua type



echo "\n===== Integer =====\n";
function sum(int $first, int $last)
{
     $total = $first + $last;
     echo "total = $total" . PHP_EOL;
}
sum(10, 5);
sum(true, false);
sum("10", "5.9");
// tidak dapat melakukan juggling array, dan jika float akan menjadi integer


echo "\n===== Float =====\n";
function sumFloat(float $first, float $last)
{
     $total = $first + $last;
     echo "total = $total" . PHP_EOL;
}
sumFloat(10, 5);
sumFloat(true, false);
sumFloat("10", "5.9");


echo "\n===== Boolean =====\n";
function doAction(bool $do)
{
     echo $do ? "true" : "false";
     echo PHP_EOL;
}

doAction(true);
doAction(-7);
doAction("No");
doAction("");


echo "\n===== Array =====\n";
function listName(array $array)
{
     foreach ($array as $data){
          echo $data . PHP_EOL;
     }
}
$names = array('Lea', 'Lia', 'Lily');
listName($names);