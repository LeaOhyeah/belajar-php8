<?php

class Student
{
     public string $id;
     public string $name;
     public int $value;

     public function __toString(): string
     {
          return "id = $this->id, name = $this->name, value = $this->value";
     }

     public function __invoke(...$arg): void
     {
          $join = join(", ", $arg);
          echo "Invoke student with arguments $join " . PHP_EOL;
     }

     public function __debugInfo()
     {
          return [
               'id' => $this->id,
               'name' => $this->name,
               'value' => $this->value,
               'varsion' => "1.0",
          ];
     }

}