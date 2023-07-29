<?php
// urutan prioritas function overriding  
// ParentClass -> Trait ->  ChildClass -> dijalankan

// trait visibility override
// selain melakukan override function, kita juga bisa melakukan override visibility function didalam tait
// use NamaTrait {
     // namaFunction as private;
// }

class ParentClass
{
     use ContohTrait;
     public function goodBy()
     {
          echo "Good By in ParentClass" . PHP_EOL;
     }

     public function hello()
     {
          echo "Good By in ParentClass" . PHP_EOL;
     }
}

class ChildClass extends ParentClass
{
     use ContohTrait;
     // public function goodBy()
     // {
     //      echo "Good By in ChildClass" . PHP_EOL;
     // }

     // public function hello()
     // {
     //      echo "Good By in ChildClass" . PHP_EOL;
     // }
}

trait ContohTrait
{
     public function goodBy()
     {
          echo "Good By in ContohTrait" . PHP_EOL;
     }

     public function hello()
     {
          echo "Good By in ContohTrait" . PHP_EOL;
     }
}