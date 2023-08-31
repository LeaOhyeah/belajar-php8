<?php
// sebelumnya kita membuat objek yang dapat di iterasi menggunakan iterator, namun pembuatan iterator secara manual sangatlah ribet
// di PHP terdapat fitur generator, yang digunakan untuk membuat iterator otomatis dengan keyword yield


echo "\n===== Tanpa Generator iterasi =====\n";

function getGenap(int $max): Traversable
{
     $array = array();
     for ($i = 1; $i < $max; $i++) {
          if ($i % 2 == 0) {
               $array[] = $i;
          }
     }
     return new ArrayIterator($array);
}

foreach (getGenap(15) as $value) {
     echo $value . PHP_EOL;
}



echo "\n===== Dengan Generator iterasi =====\n";

function getGanjil(int $max): Traversable
{
     for ($i = 1; $i < $max; $i++) {
          if ($i % 2 != 0) {
               yield $i;
          }
     }
}

foreach (getGanjil(15) as $value) {
     echo $value . PHP_EOL;
}


echo "\n===== Penerapan Generator iterasi =====\n";

class Data2 implements IteratorAggregate
{
     var string $first = "First";
     public string $second = "Second";
     private string $third = "Third";
     protected string $fourth = "Fourth";
     public array $values = [1, 2, 3, 4];

     public function getIterator(): Traversable // : Iterator 
     {
          yield 'first' => $this->first;
          yield 'second' => $this->second;
          yield 'third' => $this->third;
          yield 'fourth' => $this->fourth;
     }
}

$data2 = new Data2();

foreach ($data2 as $key => $value) {
     echo "$key => " . $value . PHP_EOL;
}