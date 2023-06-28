<?php
// Saat membuat aplikasi ada baiknya tidak dibuat dalam satu file,
// lebih baik dipisah ke beberapa file dan folder agar tidak menumpuk, ini dapat dilakukan dengan require dan include
// perbedaan required dan include adalah pada required jika file yang diambil tidak ada maka error
// sedangkan include tidak akan error dan program tetap dijalankan tetapi terdapat warning
// kode PHP dibaca dari atas kebawah, oleh karena itu pastikan melakukn include dan required pada awal program

// untuk mencegah required atau include lebih dari satu kali (yang beresiko menyebabkan error)  
// kita bisa menggunakan required_once atau include_once (hanya akan dijalankan satu kali pada kebutuhan yang sama)



require "Lib/MyFunction.php";
// require_once "Lib/MyFunction.php";

echo sayHello("Lea", "Alyu");
