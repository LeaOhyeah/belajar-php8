<?php
// Trait Inheritance
// class bisa menggunakan trait lebih dari satu, lantas bagaimana trait menggunakan trait lain? 
// mirip seperti interface menggunakan interface lain
// caranya pun sama saja seperti menggunakan trait pada class 


trait A
{
     public string $a;
}

trait B
{
     public string $b;

}

trait C
{
     public string $c;

}

trait All
{
     use A, B, C;
}

class Data
{
     use All;
}

$data = new Data();
$data->a = 'A';
$data->b = 'B';
$data->c = 'C';
var_dump($data);