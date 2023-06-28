<?php
// kita dapat mengirim data ke function dengan reference, artinya bukan cuma value yang dikirim
// tetapi sekaligus mengirim variable sebagai satu reference



echo "\n===== Tanpa Reference =====\n";
function increment($value)
{
     return ++$value;
}
$data = 1;
increment($data);
echo $data . PHP_EOL;

$newData = increment($data);
echo $newData . PHP_EOL;


echo "\n===== Dengan Reference =====\n";
function refIncrement(&$value)
{
     return ++$value;
}
$counter = 1;
refIncrement($counter);
echo $counter . PHP_EOL;


echo "\n===== Returning Reference =====\n";
// PHP juga bisa mengembalikan reference pada function, namun fitur ini memang membingunkan
// jika reference diubah maka return sebuah function juga akan berubah

function &get100()
{
     static $value = 100; // diperlukan static scope agar variable terus ada
     return $value;
}

$a = &get100();

$b = 200;
echo $b . PHP_EOL;