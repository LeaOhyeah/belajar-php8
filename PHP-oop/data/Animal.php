<?php
// saat membuat class yang abstract maka kita juga dapat membuat abstract function didalam nya
// saat membuat abstract function kita tidak boleh membuat block function (hanya nama function parameter dan return(type))
// implementasi block function di override di class child nya dan tidak boleh menggunakan akses private


namespace Animal;

abstract class Animal
{
     public string $name;
     abstract public function run(): void;
}

class Cat extends Animal
{
     public function run(): void
     {
          echo "cat $this->name is running" . PHP_EOL;
     }
}

class Dog extends Animal
{
     public function run(): void
     {
          echo "dog $this->name is running" . PHP_EOL;
     }
}