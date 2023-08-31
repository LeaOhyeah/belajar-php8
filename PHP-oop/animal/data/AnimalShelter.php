<?php

require_once "Animal.php";

interface AnimalShelter
{
     public function adopt(string $name): Animal;
}

class CatShelter implements AnimalShelter
{
     public function adopt(string $name): Cat
     {
          $cat = new Cat($name);
          return $cat;
     }
}

class DogShelter implements AnimalShelter
{
     public function adopt(string $name): Dog
     {
          $dog = new Dog($name);
          return $dog;
     }
}