<?php
// jika kita menggunakan lebih dari satu trait dan terdapat function dengan nama yang sama maka akan terjadi error
// untuk mengatasinya denga menggunakan instanceof (mendahulukan yang mana)
// use trait A, B{
     // A::do instanceof B;
     // maka trait A akan diprioritaskan function do nya 
// }


trait A
{
     public function doA()
     {
          echo "do A" . PHP_EOL;
     }
     public function doB()
     {
          echo "do B" . PHP_EOL;
     }
}

trait B
{
     public function doA()
     {
          echo "do a" . PHP_EOL;
     }
     public function doB()
     {
          echo "do b" . PHP_EOL;
     }
}

class Conflict
{
     use A, B{
          A::doA insteadof B;
          B::doB insteadof A;
     }
}

$conflict = new Conflict();
$conflict->doA();
$conflict->doB();
