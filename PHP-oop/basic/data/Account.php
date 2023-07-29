<?php
// selain menambahkan properties / fields kita juga bisa menambahkan function / method kedalam sebuah class dan object
// caranya dengan mendeklarasikan function tersebut pada class, sama seperti function biasanya pada PHP dasar


class Account
{
     // CONSTANT
     const AUTHOR = "LeaOhyeah";

     var string $name;
     var ?string $address;
     var string $country = 'Indonesia';

     // FUNCTION 
     function sayHello(string $name)
     {
          echo "Hello $name" . PHP_EOL;
     }

     // THIS KEYWORD
     function sayGoodbye()
     {
          echo "Goodbye $this->name" . PHP_EOL;
     }

     // SELF
     // jika property terkait pada object (setiap object baru memiliki property nya sendiri) sedangkan constant terkait pada class
     // artinya constant dibuat per class bukan per object
     // jika didalam class ingin mengakses constant maka dengan NamaClass::NAMA_CONSTANT
     // namun jika kita mengkasesnya pada class (misal pada function) itu sendiri maka cukup dengan keyword self::NAMA_CONSTANT
     // $this (object saat ini) self (class saat ini)
     function info()
     {
          echo "Author is " . self::AUTHOR . PHP_EOL;
     }
}