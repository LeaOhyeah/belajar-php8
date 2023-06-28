<?php
// float dioperasikan dengan integer menjadi integer 
$data1 = 1.5;
$data2 = 2;
echo $data1 * $data2;
$newData = $data1 * $data2;
echo PHP_EOL;

var_dump($data1 * 2);
var_dump($newData);

echo PHP_EOL . PHP_EOL;


// nilai counter setelah selesai perulangan 
for ($i = 0; $i < 3; $i++) {
     echo $i . PHP_EOL;
}
echo "counter is " . $i . PHP_EOL; 
$a = 0;
while ($a < 3) {
     echo $a . PHP_EOL;
     $a++;
}
echo "counter is " . $a . PHP_EOL; 

echo PHP_EOL . PHP_EOL;

