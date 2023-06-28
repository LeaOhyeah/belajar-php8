<?php
// PHP mendukung pemanggilan function dari value sebuah variable, $variable()
// untuk menambahkan argument dengan $variable(argument)
// kegunaan nya kita dapat memanggil function di dalam parameter function lain atau mengirim function pada argument


echo "\n===== Variable Function =====\n";
function foo()
{
     echo "foo" . PHP_EOL;
}

function bar()
{
     echo "bar" . PHP_EOL;
}

$functionFoo = "foo";
$functionBar = "bar";

$functionFoo();
$functionBar();

echo "\n===== Variable Function (Penerapan) =====\n";
function sayHello(string $name, $filter)
{
     $finalName = $filter($name);
     echo "Hello " . $finalName . PHP_EOL;
}

function addMr(string $name): string
{
     return "Mr." . $name;
}

sayHello("Lea", "addMr");
sayHello("Lea", "strtoupper"); // function bawaan PHP