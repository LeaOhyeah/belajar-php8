<?php

class Zero
{
     private array $properties = array();

     public function __set($name, $value): void
     {
          $this->properties[$name] = $value;
     }

     public function __get($name)
     {
          return $this->properties[$name] ?? "PROPERTY UNDEFINED";
     }

     public function __isset($name): bool
     {
          return isset($this->properties[$name]);
     }
     
     public function __unset($name): void
     {
          unset($this->properties[$name]);
     }
}

$zero = new Zero();

echo "\n===== set =====\n";
$zero->undefined = "data";
var_dump($zero);


echo "\n===== get =====\n";
echo $zero->name;


echo "\n===== isset =====\n";
isset($zero->data);


echo "\n===== unset =====\n";
unset($zero->data);


echo "\n===== implementation =====\n";
$zero->firstName = "Lea";
$zero->lastName = "Alyu";

echo "First Name: $zero->firstName" .PHP_EOL;
echo "Last Name: $zero->lastName" .PHP_EOL;
