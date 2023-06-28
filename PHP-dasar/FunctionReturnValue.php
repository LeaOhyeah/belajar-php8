<?php
// function secara default tidak menghasilkan return apapun, namun jika ingin kita bisa melakukannya dengan keyword return
// kita hanya bisa menghasilkan satu return dalam satu function
// return value;
// ketika sampai pada return maka kode dibawahnya tidak akan dijalankan lagi


echo "\n===== Function Return =====\n";
function sum($first, $second)
{
     $total = $first + $second;
     return $total;
}

$result = sum(12, 13);
echo $result . PHP_EOL;


echo "\n===== Function Return =====\n";
function trafficLights($value)
{
     switch ($value) {
          case 'red':
               return 'stop';
          case 'yellow':
               return 'slow down and wait';
          case 'green':
               return 'go';
          default:
               return 'who knows';
     }
}
$data = trafficLights('yellow');
echo $data . PHP_EOL;