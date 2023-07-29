<?php
// sebelumnya kita menggunakan abstract sebagai kontrak untuk class child nya, namun sebenarnya lebih tepatnya kita menggunakan interface
// ini mirip seperti abstract yang membedakan semua method otomatis abstract, tidak memiliki block
// disini tidak boleh memiliki properties hanya boleh constant dan semua method abstract 
// untuk mewariskan class interface dengan keyword implements (bukan extends) dan class child boleh memiliki lebih dari satu parent

namespace Data;

interface Car
{
     public function drive(): void;

     public function getTire(): int;
}

class Avanza implements Car
{
     public function drive() :void
     {
          echo "Drive Avanza" . PHP_EOL;
     }

     public function getTire(): int
     {
          return 4;
     }
}

// sama seperti ini
// abstract class TheCar
// {
//      abstract public function drive();
//      abstract public function getTire();
// }

// boleh digabung dengan extend 
// class TheAvanza extends OtherClass implements TheCar{}

// boleh menggunakan polymorphism (data Car menggunakan)