<?php
require_once "data/Account.php";


echo "\n===== Constant =====\n";
// seperti variable, property juga dapat berubah-ubah nilainya, untuk mencegahnya sapat menggunakan constant seperti variable
// sejak PHP 7.4 kita bisa menggunakan keyword const NAMA_CONSTAN untuk membuat constant 

define('APP', 'Belajar PHP');
echo APP . PHP_EOL;


echo "\n===== Constant in Class =====\n";
// untuk mengakses constant tidak sama seperti property, karena data property dibuat pada setiap object baru. 
// sedangkan constant selalu sama dalam object manapun
// NamaClass::NamaConstant dan tidak perlu membuat object

echo Account::AUTHOR . PHP_EOL;


echo "\n===== Self in Class =====\n";
$data = new Account();
$data->info();
