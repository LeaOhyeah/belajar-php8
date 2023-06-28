<?php
// ini adalah perulangan yang lebih sederhana karena hanya memiliki kondisi dalam expression nya
// while (kodisi) {
//      block
// }

echo "\n===== While Loop =====\n";
$counter = 0;
while ($counter <= 5) {
     echo "loop ke $counter" . PHP_EOL;
     $counter++;
}

echo "\n===== Syntax Alternative =====\n";
$counter = 0;
while ($counter <= 5):
     echo "loop ke $counter" . PHP_EOL;
     $counter++;
endwhile;