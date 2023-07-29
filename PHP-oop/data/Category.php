<?php
// dalam oop terdapat istilah encapsulation artinya memastikan data sensitive sebuah objek tersembunyi dari akses luar
// hal ini bertujuan menjaga data objek tetap baik dan valid  
// untuk mencapai ini dengan membuat properties nya private dan membuat function jika ingin memanipulasinya (getter dan setter)


namespace Category;

class Category
{
     private string $name;
     private bool $expensive;

     public function getName(): string
     {
          return $this->name;
     }

     public function setName(string $name) : void
     {
          // $this->name = $name;
          if(trim($name) != ''){
               $this->name = $name;
          }
     }

     public function isExpensive(): string
     {
          return $this->expensive;
     }

     public function setExpensive(bool $expensive) : void
     {
          $this->expensive = $expensive;
     }
     

}