<?php
// sebuah child bisa implement lebih dari satu interface, bahkan interface bisa implement lebih dari satu interface Location
// namun jika interface ingin meng implement interface lain maka menggunakan keyword extends bukan implement 
// (interface hanya boleh implement interface lain dengan keywords extends bukan implement ke class biasa)

interface HasBrand
{
     public function getBrand(): void;
}

interface IsMaintance
{
     public function IsMaintance(): bool;
}

interface Car extends HasBrand, IsMaintance
{

}

class Avanza implements Car
{
     public function getBrand(): void
     {
          echo "Brand Avanza" . PHP_EOL;
     }

     public function IsMaintance(): bool
     {
          return true;
     }
}