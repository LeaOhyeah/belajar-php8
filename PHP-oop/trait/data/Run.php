<?php
// selain konkrit function (lengkap) di trait juga bisa menambahkan abstract function
// maka class yang menggunakan trait tersebut wajib meng override function abstract tersebut

namespace Data\Traits;

trait CanRun
{
     abstract function run(): void;
}

class Orang
{
     use CanRun;

     public string $name;
     
     public function __construct($name)
     {
          $this->name = $name;
     }

     public function run(): void
     {
          echo "$this->name bisa lari";
     }
}