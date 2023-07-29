<?php

class Manager
{
     var string $name;
     var string $title;

     public function __construct(string $name, string $title = "Manager")
     {
          $this->name = $name;
          $this->title = $title;
     }

     public function sayHello($name)
     {
          echo "Hello $name, my name is Manager $this->name" . PHP_EOL;
     }

     public function sayHi()
     {
          echo "Hi, i am a Manager" . PHP_EOL;
     }
}

class VicePresident extends Manager
{
     public function __construct(string $name)
     {
          parent::__construct($name, "VP"); // direkomendasikan
          $this->name = $name;
     }

     public function sayHello($name)
     {
          echo "Hello $name, my name is VP $this->name" . PHP_EOL;
     }

     public function sayHi()
     {
          echo "Hi, i am a VP" . PHP_EOL;
     }

     public function sayHiParent()
     {
          return parent::sayHi();
     }
}