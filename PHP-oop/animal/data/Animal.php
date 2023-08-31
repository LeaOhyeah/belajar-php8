<?php

require_once "Food.php";

abstract class Animal
{
     public string $name;

     public function __construct($name)
     {
          $this->name = $name;
     }

     // Covariance
     abstract public function run(): void;

     // Contravariance
     abstract public function eat(AnimalFood $animalFood): void;
}

class Cat extends Animal
{
     public function run(): void
     {
          echo "Cat $this->name is running" . PHP_EOL;
     }

     public function eat(AnimalFood $animalFood): void
     {
          echo "Cat $this->name has been eaten" . PHP_EOL;          
     }
}

class Dog extends Animal
{
     public function run(): void
     {
          echo "Dog $this->name is running" . PHP_EOL;
     }

     public function eat(Food $food): void
     {
          echo "Dog $this->name has been eaten" . PHP_EOL;
     }
}