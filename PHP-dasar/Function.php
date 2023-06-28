<?php
// function atau method adalah block program yang akan berjalan ketika dipanggil
// sebenarnya kita sudah menggunakan function seperti isset(), count(), etc...
// untuk membuat function menggunakan kata kunci function namaFunction() {}, nama function harus unique dalam satu global
// function, nama function (tanpa spasi), block program
// untuk memanggil function dengan namaFunction()

// lokasi function
// PHP sangat flexible dalam pembuatan function, tidak seperti bahasa pemrograman lain yang mengharuskan ada di dalam class
// namun jika kode function belum pernah dieksekusi maka tidak dapat dipanggil

echo "\n===== Function =====\n";
function sayHello()
{
     echo "Hello!" . PHP_EOL;
}
// hanya dijalankan ketika dipanggil
sayHello();
sayHello();


echo "\n===== Lokasi Function =====\n";
$buat = true;
if ($buat) {
     function sayHi()
     {
          echo "Hi" . PHP_EOL;
     }
}
sayHi(); // akan error jika if tidak dijalankan

function action()
{
     function sayYosh()
     {
          echo "Yosh" . PHP_EOL;
     }
}
action(); // akan error jika dijalankan lebih dari satu kali (karena sama saja membuat dua function sayYosh)
sayYosh(); // akan error jika action tidak dijalankan