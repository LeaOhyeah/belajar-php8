<?php

echo "\n===== Array sebagai Map =====\n";
// biasanya pada bahasa pemrograman lain terdapat tipe data map (asosiasi key dan value), namun di PHP map dibuat dengan array
// secara default array menggunakan index number sebagai key dan value nya bebas
// namun kita dapat menggunakan jenis tipe data key lain (harus unique), seperti string.
// hal tersebut terlihat seperti map pada bahasa pemrograman lain

// array secara default
$array = array(
     0 => 'data', 
     1 => 'data', 
     2 => 'data', 
);

// membuat map dengan array
$map = [
     'id' => '001',
     'username' => 'LeaOhyeah',
     'password' => 'password',
];

// operasi mengambil data
var_dump($map['username']);   


echo "\n===== Array di Dalam Array (nested/bersarang) =====\n";
$user = [
     'id' => '2',
     'username' => 'Lily',
     'password' => 'password',
     'address' => [
          'city' => 'Bojonegoro',
          'province' => 'East Java',
     ],
];

// opersi mengambil data
var_dump($user['address']['city']);