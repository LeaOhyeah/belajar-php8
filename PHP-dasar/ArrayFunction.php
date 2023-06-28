<?php
// selain string juga terdapat banyak function yang ada pada array PHP
// dokumentasi lengkap https://www.php.net/manual/en/ref.array.php



echo "\n===== Yg sering digunakan (keys, values, map lalu sort, rsort dan shuffle) =====\n";
// array map
$data = [1, 2, 6, 4, 5];
$mapFunction = fn(int $val) => $val * 10;
$resultMap = array_map($mapFunction, $data);
echo "========= memecah array dan memasukkan masing-masing data ke function" . PHP_EOL;
echo join(", ", $data) . " menjadi " . join(", ", $resultMap) . PHP_EOL;

// rsort (reverse sort)
rsort($resultMap);
echo "========= mengurutkan secara terbalik (descending)" . PHP_EOL;
echo join(", ", $resultMap) . PHP_EOL;

// sort 
sort($resultMap);
echo "========= mengurutkan  (ascending)" . PHP_EOL;
echo join(", ", $resultMap) . PHP_EOL;

// array_key (return keys / indexs)
$user = [
     "username" => "LeaOhyeah",
     "password" => "password",
     "is_male" => true,
];
$result = array_keys($user);
echo "========= array_keys hanya mengembalikan index atau key array" . PHP_EOL;
var_dump($user);
var_dump($result);
$result2 = array_keys($result);
var_dump($result2);

// array_values (return values array)
$userData = array_values($user);
echo "========= array_values hanya mengembalikan value array" . PHP_EOL;
var_dump($user);
var_dump($userData);

