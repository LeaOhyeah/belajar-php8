<?php
// adalah mekanisme sebuah function memanggil function lainnya sesuai argument yang diberikan
// sebenarnya ini sudah kita lakukan pada VariableFunction dan AnonymousFunction 
// namun ada cara lain untuk implementasi callback yaitu dengan tipe data callable
// untuk memanggil callback function dengan call_user_function(callable, arguments)



echo "\n===== Callback =====\n";
function sayHello(string $name, callable $filter){
     $finalName = call_user_func($filter, $name);
     echo "Hello " . $finalName . PHP_EOL;
}
sayHello("Lea", "strtoupper");
sayHello("Lea Juga", function (string $name){
     return strtolower($name);
});
sayHello("Lea Lagi", fn($name) => strtoupper($name));



echo "\n===== Perbedaan =====\n";
function sayGoodBye(string $name, $filter)
{
     $finalName = $filter($name);
     echo "Good bye $finalName" . PHP_EOL;
}
sayGoodBye("Lea", "strtoupper");
sayGoodBye("Lea Juga", function (string $name) {
     return strtolower($name);
});
sayGoodBye("Lea Lagi", fn($name) => strtoupper($name));
// sebenarnya perbedaan hanya pada penggunaan callable untuk memudahkan konsistensi kode