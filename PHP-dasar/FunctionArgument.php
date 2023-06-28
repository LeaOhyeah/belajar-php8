<?php
// argument adalah nilai yang diberikan ketika memanggil function
// parameter adalah variable yang menampung argument pada sebuah function
// jika membutuhkan lebih dari satu argument dan parameter maka dipisahkan dengan koma dan dengan urutan yan dama atau memberi key
// kita dapat membuat default argument value, jika memanggil function dan tidak memberi nilai parameter / tidak mengirim argument
// namun argument tanpa key akan tetap dikirim urut, ini artinya default argument value di awal akan diabaikan


echo "\n===== Argument Function =====\n";
function sayHello($name)
{
     echo "Hello $name" . PHP_EOL;
}

sayHello('udin');


echo "\n===== Arguments Function =====\n";
function saySomething($message, $name)
{
     echo $message . ' ' . $name . PHP_EOL;
}

saySomething('Good morning', 'udin');
saySomething(name: 'Good morning', message: 'udin');


echo "\n===== Default Argument Value =====\n";
function welcome($name = "User")
{
     echo "Welcome $name" . PHP_EOL;
}
welcome();
welcome('Lea');


echo "\n===== Default Argument Value yang Diabaikan =====\n";
function welcomeUser($firstName = "User", $lastName)
{
     echo "Welcome $firstName $lastName" . PHP_EOL;
}
// welcomeUser('Alyu'); // ini akan tetap error karena data akan dikirim ke lastName
