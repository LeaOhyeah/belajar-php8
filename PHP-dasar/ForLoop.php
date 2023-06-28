<?php
// for adalah salah satu perulangan, block dalam for akan selalu dijalankan selama kondisi true
// for (init statement; kondisi; post statement) { 
//      block code
// }
// init -> kondisi true -> block -> post -> kondisi true -> block -> post ..... n
//      -> kondisi false -> end;
// jika tidak memiliki ketiganya maka akan terjadi perulangan tanpa henti

echo "\n===== For Lopp =====\n";
for ($counter = 0; $counter < 3; $counter++) {
     echo "Hello $counter" . PHP_EOL;
}

echo "\n===== Syntax Alternative =====\n";
for ($counter = 0; $counter < 3; $counter++):
     echo "Hello $counter" . PHP_EOL;
endfor;