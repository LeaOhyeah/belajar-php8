<?php
// selain class dan interface di PHP juga terdapat trait (mungkin tidak ada pada bahasa pemrograman lain)
// ini mirip dengan abstract class kita bisa membuat abstract function atau konkrit function (function lengkap) bahkan properties
// yang membedakan trait bisa ditambahkan lebih dari satu kedalam sebuah class (jika child dari abstract class hanya boleh satu)
// trait lebih mirip ekstension dimana kita bisa menambah konkrit function ke class dengan trait


// secara sederhana trait adalah tempat menyimpan function yang dapat digunakan ulang ke beberapa class
// untuk menggunakan trait pada class dengan keyword use
// untuk membuat trait dengan keyword trait NamaTrait


namespace Data\Traits;

trait SayGoodBye
{
     public function goodBye(string $name): string
     {
          return "Good bye " . $name . PHP_EOL;
     }
}

trait sayHello
{
     public function hello(string $name): string
     {
          return "Hello " . $name . PHP_EOL;
     }
}

trait hasName
{
     public string $name;
}

class Person
{
     use SayGoodBye, sayHello, hasName;
}