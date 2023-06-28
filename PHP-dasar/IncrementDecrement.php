<?php
// PHP mendukung Increment (naik satu nilai) dan Decrement (turun satu nilai)
// Post mengembalikan nilai lalu melakukan operasi (data++)
// Pre melakukan operasi lalu mengembalikan nilai (++data)

echo "\n===== Post Increment =====\n";
$a =1;
echo $a++;
echo "\n"; 
echo $a;
echo "\n";

$data = 10;
$result = $data++;
echo $result;
echo "\n";

echo "\n===== Pre Increment =====\n";
$b =1;
echo ++$b;
echo "\n"; 
echo $b;
echo "\n";

$data2 = 10;
$result2 = ++$data2;
echo $result2;
echo "\n";

echo "\n===== Post Decrement =====\n";
$c =1;
echo $c--;
echo "\n";
echo $c;

echo "\n===== Pre Decrement =====\n";
$d =1;
echo --$d;
echo "\n";
echo $d;

// menggunakan pre atau post tidak akan berpengaruh jika anda tidak membutuhkan return saat melakukan operasi 
// atau tidak menyimpan pada variable lain

echo "\n===== Langsung mereturn hasil =====\n";
$value = 10;
$value++;
echo $value;
echo "\n"; 
