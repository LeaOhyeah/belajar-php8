<?php
// percabangan (materi mendalam)
// materi operasi perbandingan dan logika harus sudah dikuasai
// if (expression) {
//      statement;
// } 

echo "\n===== If Statement =====\n";
// menjalankan if statement jika expression true, direkomendasikan menggunakan block {}
$nilai = 90;
$kehadiran = 30;
if ($nilai >= 75 && $kehadiran >= 24) {
     echo "Anda Lulus" . PHP_EOL;
}

echo "\n===== Else Statement =====\n";
// menjalankan if statement jika expression true, dan menjalankan else jika expression false
if ($nilai >= 75 && $kehadiran >= 75) {
     echo "Anda Lulus";
} else {
     echo "Maaf anda tidak lulus" . PHP_EOL;
}

echo "\n===== Else If Statement =====\n";
// gabungan else if maka kita dapat menggunakan lebih dari satu kondisi 
$status = 'admin';
$isBlock = false;
if ($status == 'user' && $isBlock == false) {
     echo "Welcome user!" . PHP_EOL;
} else if ($status == 'staff' && $isBlock == false) {
     echo "Welcome staff!" . PHP_EOL;
} else if ($status == 'admin' && $isBlock == false) {
     echo "Welcome admin!" . PHP_EOL;
} else {
     echo "Error" . PHP_EOL;
}

echo "\n===== Syntax Alternative =====\n";
// selain menggunakan {} juga dapat menggunakan : dan endif; (tetapi harus menggunakan elseif tanpa spasi)
if ($status == 'user' && $isBlock == false):
     echo "Welcome user!" . PHP_EOL;
elseif ($status == 'staff' && $isBlock == false):
     echo "Welcome staff!" . PHP_EOL;
elseif ($status == 'admin' && $isBlock == false):
     echo "Welcome admin!" . PHP_EOL;
else:
     echo "Error" . PHP_EOL;
endif;