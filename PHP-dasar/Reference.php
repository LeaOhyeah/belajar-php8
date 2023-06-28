<?php
// Reference pada PHP berbeda dari bahasa pemrograman lain seperti C/C++, 
// ini untuk mengakses nilai variable yang sama dengan variable yang berbeda
// analoginya jika variable adalah file, maka reference adalah shortcut atau alias terhadap file yang sama
// saat mengubah value dari reference tersebut maka variable aslinya pun berubah
// untuk membuatnya dengan &namaVariable



echo "\n===== Tanpa Reference =====\n";
$name = "Lea";
$otherName = $name;
$otherName = "Lia";

echo $name . PHP_EOL;


echo "\n===== Dengan Reference =====\n";
$pass = "password";
$otherPass = &$pass;
$otherPass2 = &$pass;
$otherPass = "newpass";
$otherPass2 = "newpass2";

echo $pass . PHP_EOL;