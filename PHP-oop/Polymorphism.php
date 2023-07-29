<?php
// kita dapat mengubah bentuk object Programmer ke BackendProgrammer dan FrontendProgrammer 
// tidak dapat mengubah ke bentuk lain yang tidak terhubung dengan parent yang sama  


require_once "data/Programmer.php";
require_once "inheritance/data/Manager.php";

echo "\n===== Programmer =====\n";
$company = new Company();
$company->programmer = new Programmer("Lea");
var_dump($company);
$company->programmer = new BackendProgrammer("Lia");
var_dump($company);
$company->programmer = new FrontendProgrammer("Udin");
var_dump($company);


echo "\n===== Manager =====\n";
// $admin = new Admin();
// $admin->manager = new Staff("staff");
// var_dump($admin);
// $admin->manager = new VicePresident("vp");
// var_dump($admin);


// selain itu polymorphism juga bisa digunakan dalam function argument
echo "\n===== Function Argument =====\n";
sayHelloProgrammer(new Programmer("Udin"));
sayHelloProgrammer(new FrontendProgrammer("Mamat"));
sayHelloProgrammer(new BackendProgrammer("Ucup"));

