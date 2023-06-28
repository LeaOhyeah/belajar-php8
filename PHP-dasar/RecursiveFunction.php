<?php
// ini adalah kemampuan function untuk memanggil dirinya sendiri
// kadang terdapat banyak kausu yang lebih mudah diselesaikan denga recursive function seperti factorial



echo "\n===== Tanpa Recursive Function =====\n";
function factorialLoop(int $value): int
{
     $total = 1;
     for ($i = 1; $i <= $value; $i++) {
          $total *= $i;
     }
     return $total;
}

var_dump(factorialLoop(5));


echo "\n===== Dengan Recursive Function =====\n";
function factorial(int $value): int
{
     if ($value == 1) {
          return 1;
     } else {
          return $value * factorial($value - 1); 
     }
}
var_dump(factorial(5));

// namun akan terjadi masalah jika recuresive terlalu banyak maka menyebabkan error memory overflow
// karena function yang dipanggil akan disimpan dalam stack, jika function memanggil function lain maka akan menumpuk pada memory
