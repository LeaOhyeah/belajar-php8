<?php
// kadang kita hanya butuh menggunakan prbandingan sederhana seperti == 
// dengan switch ini akan lebih singkat (hanya mendukung perbandingan sama dengan)
// break untuk menghentikan case dalam switch

echo "\n===== Switch Statement =====\n";
$color = 'green';
switch ($color) {
     case 'red':
          echo "Berhenti";
          break;
     case 'yellow':
          echo "Hati-hati";
          break;
     case 'green':
     case 'hijau': // seperti green or hijau
          echo "Jalan";
          break;
     default:
          echo "Mati Lampu";
          break;
}
echo PHP_EOL;

echo "\n===== Syntax Alternative =====\n";
// mengganti {} dengan : dan endswitch
switch ($color):
     case 'red':
          echo "Berhenti";
          break;
     case 'yellow':
          echo "Hati-hati";
          break;
     case 'green':
     case 'hijau': // seperti green or hijau
          echo "Jalan";
          break;
     default:
          echo "Mati Lampu";
          break;
endswitch;