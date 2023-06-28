<?php
// Variable-lenght Argument List adalah kemampuan membuat parameter yang menyimpan list 
// secara otomatis ini akan membuat argument menjadi array tanpa manual mengirim array ke function
// ini hanya bisa dilakukan pada parameter / argument terakhir
// untuk membuatnya menggunakan tanda titik 3 (...) sebelum nama parameter



echo "\n===== Variable-lenght Argument List =====\n";
function listName(...$array)
{
     foreach ($array as $data) {
          echo $data . PHP_EOL;
     }
}

listName('Lea', 'Lia', 'Lily');
$names = array('Lea', 'Lia', 'Lily');
// untuk mengirim array ke function yang menggunakan argument list juga menggunakan ...data
listName(...$names);