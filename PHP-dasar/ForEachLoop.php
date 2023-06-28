<?php
// kadang pada untuk mengakses seluruh array kita menggunakan perulangan, 
// membuat counter array length dan mengakses satu per satu index 
// pada PHP ada cara yang lebih mudah, dengan for each akan mengakses seluruh array secara otomatis


echo "\n===== Tanpa ForEach =====\n";
$names = ['lea', 'lia', 'udin'];

for ($i = 0; $i < count($names); $i++) {
     echo "name $i is $names[$i]" . PHP_EOL;
}


echo "\n===== Dengan ForEach =====\n";
foreach ($names as $name) {
     echo "name is $name" . PHP_EOL;
}

$user = [
     "firstName" => 'Lea',
     "lastName" => 'Alyu',
     "nickName" => 'LeaOhyeah',
];


echo "\n===== Dengan ForEach (key) =====\n";
foreach ($user as $key => $data) {
     echo "data $key is $data" . PHP_EOL;
}

echo "\n===== Dengan ForEach Nested Array =====\n";
$users = [
     [
          "firstName" => 'Lea',
          "lastName" => 'Alyu',
          "nickName" => 'LeaOhyeah',
          "address" => [
               "city" => 'Bojonegoro',
               "country" => 'Indonesia'
          ]

     ],
     [
          "firstName" => 'Lia',
          "lastName" => 'Lia',
          "nickName" => 'LiaOhnoo',
          "address" => [
               "city" => 'Bojonegoro',
               "country" => 'Indonesia'
          ]
     ],
];

foreach ($users as $key => $data) {
     echo "data $key is $data[nickName]" . PHP_EOL;
     // echo "data $key is $data[address][city]" . PHP_EOL;
     echo "data $key is " . $data['address']['city'] . PHP_EOL;
}

$points = [
     [
          1,
          2,
          3,
     ],
     [
          2,
          2,
          2,
     ],
];

foreach ($points as $absen => $point) {
     $absen++;
     foreach ($point as $key => $data) {
          $key++;
          echo "Absen $absen poin ke $key : ";
          echo $data . PHP_EOL;
     }
}
