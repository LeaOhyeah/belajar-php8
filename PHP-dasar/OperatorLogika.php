<?php
// operator logika membandingkan nilai boolean dan menghasilkan boolean juga

echo "\n===== Logika And (&& atau and) =====\n";
// mengembalikan true jika keduanya true, mengembalikan false jika ada false
var_dump(true && true);
var_dump(true && false);
var_dump(false && false);

echo "\n===== Logika Or (|| atau or) =====\n";
// mengembalikan true jika ada true, mengembalikan false jika keduanya false
var_dump(true || true);
var_dump(true || false);
var_dump(false || false);

echo "\n===== Logika Not (!) =====\n";
// mengembalikan true jika false, mengembalikan false jika true
var_dump(!true);
var_dump(!false );

echo "\n===== Logika Xor (xor)=====\n";
// mengembalikan true jika ada true tapi tidak keduanya, mengembalikan false jika keduanya true atau false
var_dump(true xor true);
var_dump(true xor false);
var_dump(false xor false);


echo "\nmasih ada yang perlu dipelajari";