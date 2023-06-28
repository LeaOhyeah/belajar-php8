<?php
// digunakan untuk membandingkan nilai dan menghasilkan boolean
// true jika perbandingan benar dan sebaliknya
// dalam PHP terdapat type juggling yang dapat mengubah tipe data ke bentuk lain agar bisa dioperasikan dengan tipe yang sesuai

$a = 10;
$b = '10';
$c = '5';

echo "\n===== $a Sama dengan '$b' =====\n";
var_dump($a == $b);

echo "\n===== $a Identik dengan '$b' =====\n";
var_dump($a === $b);

echo "\n===== $a Tidak sama dengan '$b' =====\n";
var_dump($a != $b); // dapat juga ditulis dengan <>

echo "\n===== $a Tidak identik dengan '$b' =====\n";
var_dump($a !== $b);

echo "\n===== $a Lebih besar dari '$c' =====\n";
var_dump($a > $c);

echo "\n===== $a Lebih kecil dari '$c' =====\n";
var_dump($a < $c);

echo "\n===== $a Lebih besar atau sama dengan dari '$b' =====\n";
var_dump($a >= $b);

echo "\n===== $a Lebih kecil atau sama dengan dari '$b' =====\n";
var_dump($a <= $b);

// semua data string murni jika menggunakan > atau < akan membingungkan 