<?php
// sama seperti parameter dan argument, kita dapat mendeklarasikan type data pada return
// ini memudahkan ketika membaca tipe data return, dan memastikan return data sesuai harapan
// untuk mendeklarasikan nya dengan : type data pada akhir nama function 
// function name() : string
// ini juga mendukung type juggling
// ini akan memudahkan pembacaan dan mendeteksi error ketika return yang kita buat tidak sesuai



echo "\n===== Return Type Declaration =====\n";
function sum($first, $second) : int
{
     $total = $first + $second;
     return $total;
}

$result = sum(12, 13);
echo $result . PHP_EOL;


function trafficLights($value) : string
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