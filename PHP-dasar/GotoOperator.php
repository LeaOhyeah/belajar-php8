<?php
// ini adalah fitur yang sebenarnya jarang digunakan dalam PHP
// biasanya kode program dijalankan dari atas kebawah, goto memungkinkan program untuk meloncat dari satu bagian ke bagain lain
// goto bahkan bisa meloncat dari dari bawah ke atas dan ini dapat membingunkan pembacaan program
// untuk membuat goto kita harus membuat label 

// goto label;
// statement yang diabaikan
// label:
// // statement

echo "\n===== Go to Operator (melewati program) =====\n";
goto a;
echo "Hello, world" . PHP_EOL;

a:
echo "Hello, A" . PHP_EOL;

echo "\n===== Go to Operator (melewati perulangan) =====\n";
$i = 0;
while ($i <= 10) {
     echo "Hello $i" . PHP_EOL;
     goto end;
}
end:
echo "End of Loop" . PHP_EOL;