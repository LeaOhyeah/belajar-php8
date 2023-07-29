<?php
// fields / attributes / properties adalah data yang ada pada Object,
// namun sebelum memasukkan attribute kita harus mendeklarasikan ke dalam Class terlebih dahulu
// hampir sama seperti membuat variable tetapi menggunakan keyword var didalam Class


class User
{
     // PROPERTIES
     // var $name;
     // var $address;
     // var $country;
     
     // PROPERTIES TYPE DECLARATION 
     // var string $name;
     // var string $address;
     // var string $country;
     
     // DEFAULT VALUE
     // var string $name;
     // var ?string $address;
     // var string $country = 'Indonesia';

     // NULLABLE 
     var string $name;
     var ?string $address;
     // var string $address = null;
     var string $country = 'Indonesia';
}