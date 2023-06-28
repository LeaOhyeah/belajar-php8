<?php
// ini diperkenalkan pada PHP 7.4 dan merupakan alternative anonymous function yang lebih sederhana
// ini cuma digunakan untuk anonymous function yang sederhana, secara garis besar anonymous dan arrow function adalah hal yang sama
// perbedaan nya variable dari luar closure dapat diakses tanpa menggunakan keyword use
// pembuatan nya tidak menggunakan keyword function tetapi fn
// tidak perlu menggunakan return karena data otomatis dikembalikan



echo "\n===== Arrow function =====\n";
$firstName = "Lea";
$lastName = "Alyu";
$arrowFunction = fn() => "Hello $firstName" . PHP_EOL;

echo $arrowFunction();

// ini artinya harus menuliskan kode yang memiliki return sebuah nilai 