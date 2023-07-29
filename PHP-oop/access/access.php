<?php
// visibility / access modifier adalah kemampuan property, function dan constant dapat diakses dari mana saja
// secara default property, function dan constant yang kita buat dapat diakses dari mana saja atau public
// selain public ada juga private dan protected
// class yang sama , subclass, luar class
// public (y,y,y)
// protected (y,y,n)
// private (y,n,n)


require_once "data/Product.php";

// private
$product = new Product("Apple", 20);
// var_dump($product); //error karena private
// echo $product->name;
// echo $product->price;
echo $product->getName() . PHP_EOL; // getter dan setter akan dibahas materi selanjutnya
echo $product->getPrice() . PHP_EOL;


// protected
$dummy = new ProductDummy("Dummy", 100);
echo $dummy->info();

