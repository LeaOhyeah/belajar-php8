<?php

namespace Data\TheClass;

class Main
{
     public string $name = 'Main Class';
     private string $password;

     public function setPassword($password)
     {
          $this->password = $password;
     }

     static public function main()
     {
          $i = 0;
          while ($i <= 5) {
               echo "Hello $i!" . PHP_EOL;
               $i++;
          }
     }
}

function main()
{
     echo "The Main" . PHP_EOL;
}