<?php
// saat membuat object dari class kita bisa melakukan iterasi ke semua property yang terdapat di object tersebut dengan foreach
// (foreach juga bisa dilakukan pada object, bukan hanya array)
// hal ini mempermudah mengakses property yang ada di object (hanya property public)


echo "\n===== Object Iteration =====\n";

class Data
{
     var string $first = "First";
     public string $second = "Second";
     private string $third = "Third";
     protected string $fourth = "Fourth";
}

$data = new Data();

foreach ($data as $key => $value) {
     echo "$key => $value" . PHP_EOL;
}


echo "\n===== Manual Object Iteration with IteratorAggregate and ArrayIterator =====\n";
// sebelumnya kita melakukan iterasi secara otomatis dengan foreach, jika ingin menangani secara manual kita bisa menggunakan iterator
// Iterator adalah interface yang digunakan untuk melakukan iterasi, namun membuatnya lumanyan ribet, oleh karena itu kita menggunakan ArrayIterator
// yaitu iterasi dengan menggunakan array sebagai datanya
// dan agar bisa diakses secara manual kita menggunakan interface IteratorAggregate dan meng override function getIterator 
// dalam function tersebut kita me return data iterator


class Data2 implements IteratorAggregate
{
     var string $first = "First";
     public string $second = "Second";
     private string $third = "Third";
     protected string $fourth = "Fourth";
     public array $values = [1, 2, 3, 4];

     public function getIterator(): Traversable
     {
          $data = [
               'first' => $this->first,
               'second' => $this->second,
               'third' => $this->third,
               'fourth' => $this->fourth,
               // 'values' => $this->values,
          ];

          return new ArrayIterator($data);
     }
}

$data2 = new Data2();

foreach ($data2 as $key => $value) {
     echo "$key => " . $value . PHP_EOL;
}

// foreach ($data2 as $key => $value) {
//      if (is_array($value)) {
//           foreach ($value as $index => $val) {
//                echo "$index -> $val" . PHP_EOL;
//           }
//      } else {
//           echo "$key => " . $value . PHP_EOL;
//      }
// }

