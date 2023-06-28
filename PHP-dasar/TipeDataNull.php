<?php
// data null artinya variable tanpa nilai
// kita bisa mengkosongkan variable dengan null juga, case insensitive

echo "\n===== Null =====\n";

$love = null;
echo $love;
var_dump($love);

// untuk mengecek apakah data null (turthy angka yang bukan 0 adalah true)
echo "is null : ";
echo is_null($love);
echo "\n";

echo "\n===== Menghapus variable / unset =====\n";

unset($love);

echo "\n===== Mengecek keberadaan variable / isset =====\n";

var_dump(isset($love));