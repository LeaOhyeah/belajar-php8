<?php
// pada switch kita sudah mengenal break, tetapi disini fungsinya untuk menghentikan perulagan
// sedangkan continue akan menghentikan perulangan saat ini dan melanjutkan ke perulangan berikutnya 
// continue seperti skip


echo "\n===== Break dalam Loop =====\n";
$counter = 0;
while (true) {
     echo "ini perulangan ke $counter" . PHP_EOL;
     $counter++;
     if ($counter > 5) {
          break;
     }
}

echo "\n===== Continue dalam Loop =====\n";
$a = 0;
while ($a <= 10) {
     $a++;
     if ($a % 2 == 0) {
          continue;
     }
     echo "data $a" . PHP_EOL;
}

for ($i=0; $i <=10 ; $i++) { 
     if ($i % 2 == 0) {
          continue;
     }
     echo "data $i" . PHP_EOL;
}