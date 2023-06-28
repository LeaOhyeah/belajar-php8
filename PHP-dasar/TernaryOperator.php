<?php
// kadang pada if kita hanya melakukan pengecekan satu kondisi apakah benar atau tidak lalu memberi nilai pada variable
// ini dapat dipersingkat dengan ternary
// $data = expression ? 'true' : 'false';

echo "\n===== Jika If Statement =====\n";
$isMale = true;
$hi = null;

if ($isMale) {
     echo "hi bro" . PHP_EOL;
} else {
     echo "hi sis" . PHP_EOL;
}

echo "\n===== Dengan ternary =====\n";
$halo = $isMale == true ? "Hi bro" : " Hi sis";
echo $halo . PHP_EOL;