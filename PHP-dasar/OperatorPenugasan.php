<?php
// operator penugasan menggunakan karakter = (sebenarnya kita sudah menggunakan itu sejak awal)
// fungsinya untuk memberikan atau mengubah nilai
// dengan ini kita juga dapat mempersingkat operasi aritmatika

echo "\n===== Operasi Penugasan (seperti aritmatika) =====\n";
$count = 0;
$a = 10;
$b = 5;

$count = $count + $a; // jika dengan aritmatika biasa
$count += $b; // jika dengan pengugasan sama dengan $count = $count + $b;

var_dump($count);
