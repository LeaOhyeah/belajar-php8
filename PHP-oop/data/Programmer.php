<?php
// berasal dari bahasa yunani yang berarti banyak bentuk. (kemampuan objek berubah bentuk menjadi bentuk lain)
// ini erat hubungan nya dengan inheritance (pewarisan)


class Programmer
{
     public string $name;

     public function __construct(string $name)
     {
          $this->name = $name;
     }
}

class BackendProgrammer extends Programmer
{

}

class FrontendProgrammer extends Programmer
{

}

class Company
{
     public Programmer $programmer;

}

// function sayHelloProgrammer(Programmer $programmer)
// {
//      echo "Hello Programmer " . $programmer->name . PHP_EOL;
// }

// type check & cast
// sebelumnya kita melakukan cek/konversi tipe data dalam PHP dasar (data bukan class) (is_string, is_array, is_bool)
// khusus tipe data object kita tidak perlu melakukan cek/konversi secara eksplisit
// namun agar aman sebelum melakukan cast pastikan melakukan type check dengan keyword $data instanceof Class (true jika sesuai)
function sayHelloProgrammer(Programmer $programmer)
{
     if ($programmer instanceof BackendProgrammer) {
          echo "Hello Backend " . $programmer->name . PHP_EOL;
     } else if ($programmer instanceof FrontendProgrammer) {
          echo "Hello Frotend " . $programmer->name . PHP_EOL;
     } else if ($programmer instanceof Programmer) {
          echo "Hello Programmer " . $programmer->name . PHP_EOL;
     }
}