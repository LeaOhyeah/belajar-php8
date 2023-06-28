<?php
echo "\n===== Expression =====\n";
// adalah bagian terpenting pada PHP, expression adalah apapun yang memiliki nilai atau value 
// contoh 
$a = 5; // 5 adalah expression
$b = $a; // $a adalah expression

function getValue()
{
     return 100;
}
$result = getValue(); // getValue() adalah expression yang bernilai 100

echo "\n===== Statement =====\n";
// adalah kalimat lengkap dalam bahasa, berisi kode yang biasanya akhirnya terdapat titik koma
// bisa dibilang expressions adalah bagian dari statement
$name = 'Lea Alyu'; // satu baris ini adalah statement

echo "\n===== Block =====\n";
// adalah kumpulan statement yang diawali kurung kurawal dan diakhiri kurung kurawal juga {block}

function data()
{
     echo "name\t : Lea";
     echo "age\t : 19";
}
// dua baris tersebut merupakan block