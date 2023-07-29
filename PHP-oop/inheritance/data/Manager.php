<?php

class Manager
{
     var string $name;
     
     public function __construct(string $name)
     {
          $this->name = $name;
     }
     

     public function sayHello($name)
     {
          echo "Hello $name, my name is $this->name" . PHP_EOL;
     }
}

class VicePresident extends Manager
{
}
// class Staff extends Manager
// {
// }

// class Admin
// {
//      public Manager $manager;
// }