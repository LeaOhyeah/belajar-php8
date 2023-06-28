<?php
// variable biasanya bersifat mutable, jika ingin imutable maka menggunakan constant
// constant adalah tampat menyimpan data yang tidak dapat dirubah setelah di deklarasikan
// serta tidak bisa di deklarasi ulang (menyebabkan error)
// untuk membuatnya dengan function define() dan lebih baik menggunakan UPPERCASE

echo "\n===== Constant =====\n";
define("AUTHOR", "Lilyana G Maulana");

// untuk mengakses menggunakan echo
echo AUTHOR;