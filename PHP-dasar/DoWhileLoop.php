<?php
// ini mirip dengan perulangan while, perbedaan nya hanya pada pengecekan kondisi
// jika pada while dilakukan pengecekan kondisi terlebih dahulu, sedangkan pada Do while block program dijalankan terlebih dahulu
// dengan ini maka do while minimal melakukan satu perulangan
// contoh kasus tanya jawab

echo "\n===== Do While Loop =====\n";
$a = 1;
do {
     echo "this $a" . PHP_EOL;
     $a++;
} while ($a < 1);