<?php

class Product
{
     protected string $name;
     protected int $price;

     public function __construct(string $name, int $price)
     {
          $this->name = $name;
          $this->price = $price;
     }

     public function getName()
     {
          return $this->name;
     }

     public function getPrice()
     {
          return $this->price;
     }

}

class ProductDummy extends Product
{
     public function info()
     {
          return "Name is " . $this->name . " and Price is " . $this->price . PHP_EOL;
     }
}