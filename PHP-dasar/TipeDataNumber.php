<?php
// var_dump() merupakan sebuah function untuk melihat informasi dari variable atau data
// \t adalah tab

echo "\n===== Tipe data integer =====\n";

echo "decimal (basis 10)\t: ";
var_dump(1234);

echo "octal (basis 8)\t\t: ";
var_dump(0123); // diawali 0

echo "hexadecimal (basis 16)\t: ";
var_dump(0x1A); // diawali dengan 0x

echo "binary (basis 2 )\t: ";
var_dump(0b011); // diawali dengan 0b

echo "undersocre\t\t: ";
var_dump(1_000_000); // memudahkan membaca data

// =================================================================

echo "\n===== Tipe data float / double / floating point =====\n";

echo "floating point\t:";
var_dump(1.25); // point sebagai koma

// hanya untuk memudahkan membaca dalam code
echo "undersocre\t: ";
var_dump(1_000_000.5);


// =================================================================

echo "\n===== e notation =====\n";

echo "notation plus\t:";
var_dump(12e3);
// e adalah perkalian notasi 0, misal 12e3 maka 12 dikali 1000 

echo "notation plus\t:";
var_dump(1.2e3);
// e adalah perkalian notasi 0, misal 1.2e3 maka 1.2 dikali 1000 

echo "notation minus\t:";
var_dump(1.2e-3);
// e adalah perkalian notasi 0, misal 1.2e3 maka 1.2 dikali 0.001 

// =================================================================

echo "\n===== Integer overflow =====\n";

// jika integer melebihi batas size pada sistem oprasi maka akan menjadi float dengan e notation atau double

echo "sistem 64\t:";
var_dump(9223372036854775807);

echo "overflow\t:";
var_dump(9223372036854775808);

echo "\n===== Integer overflow =====\n";