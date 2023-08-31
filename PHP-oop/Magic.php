<?php
// adalah function yang sudah ditentukan kegunaan nya di PHP
// kita tidak bisa membuat function tersebut, kecuali memang sudah ditentukan kegunaanya
// sebelumnya kita pernah menggunakan magic function (construct, destruct dan clone)
// reverensi di web maual PHP, disini hanya akan membahas beberapa contoh


require_once "data/Student.php";

$student = new Student();
$student->id = "1";
$student->name = "Lea";
$student->value = 100;


echo "\n===== To String =====\n";
// merupakan representasi string sebuah objek
$string = (string) $student;
echo $string . PHP_EOL;
echo $student . PHP_EOL;


echo "\n===== Invoke =====\n";
// merupakan function yang dieksekusi ketika objek dianggap sebgai function
$student("Lea", "Alyu");


echo "\n===== Debug Info =====\n";
// debug info untuk var_dump
var_dump($student);