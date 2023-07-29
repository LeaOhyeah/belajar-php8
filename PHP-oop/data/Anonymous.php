<?php
// Class tanpa nama atau anonynmous class, kemampuan mendeklarasikan class sekaligus meng-instansi objeknya secara langsung
// ini memungkinkan langsung membuat objek didalam interface atau abstract class 
// sama seperti anonynmous function yang bisa dimasukan didalam variable


interface HelloWorld
{
     public function sayHello();
}


echo "\n===== Tanpa Anonymous Class =====\n";
class SampleHelloWorld implements HelloWorld
{
     public function sayHello()
     {
          echo "Hello World" . PHP_EOL;
     }
}

$sample = new SampleHelloWorld();
$sample->sayHello();


echo "\n===== Dengan Anonymous Class =====\n";
$helloWorld = new class implements HelloWorld {
     public function sayHello()
     {
          echo "Hello World in Anonymous Class" . PHP_EOL;
     }
};

$helloWorld->sayHello();


echo "\n===== Construct in Anonymous Function =====\n";
$construct = new class("Lea") implements HelloWorld {
     public string $name;

     public function __construct($name)
     {
          $this->name = $name;
     }

     public function sayHello()
     {
          echo "Hello $this->name" . PHP_EOL;
     }
};

$construct->sayHello();

// fitur seperti destruct function juga didukung dalam anonymous class