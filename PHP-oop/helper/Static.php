<?php
// keyword ini digunakan untuk membuat property atau function di class bisa diakses secara langsung tanpa membuat objek (seperti constant)
// maka property atau function static akan lepas dari objek dan berhubungan langsung dengan class (seperti constant)
// cara mengaksesnya pun seperti constant yaitu NamaClass::property atau function static
// static function tidak dapat mengakses function bisa karena ia tidak lagi menempel pada objek dari class tersebut
// biasanya digunakan untuk helper atau utility 


require_once "data/MathHelper.php";

use Helper\MathHelper;

echo "\n===== Mengakses Static Property =====\n";
echo MathHelper::$name . PHP_EOL;


echo "\n===== Mengubah Static Property =====\n";
MathHelper::$name = 'Lea';
echo MathHelper::$name . PHP_EOL;


echo "\n===== Static Function =====\n";
$result = MathHelper::sum(10, 10 , 10);
echo $result . PHP_EOL;