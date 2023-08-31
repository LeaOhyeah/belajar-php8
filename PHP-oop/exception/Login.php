<?php

require_once "helper/Validation.php";
require_once "data/User.php";

$loginRequest = new User();
$loginRequest->username = "Lea";
// $loginRequest->password = "";


echo "\n===== Studi Kasus =====\n";

// validateLoginRequest($loginRequest);
// echo "Valid";


echo "\n===== Try Catch (keseluruhan) =====\n";
try {
     validateLoginRequest($loginRequest);
} catch (\Throwable $th) {
     echo "Error: {$th->getMessage()}" . PHP_EOL;
}


echo "\n===== Try Catch (multiple & or) =====\n";
try {
     validateLoginRequest($loginRequest);
} catch (ValidationException $ve) {
     echo "Error Validation Exception: {$ve->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
     echo "Error Exception: {$e->getMessage()}" . PHP_EOL;
}

try {
     validateLoginRequest($loginRequest);
} catch (ValidationException | Exception $error) {
     echo "Error Validation Exception: {$error->getMessage()}" . PHP_EOL;
}


echo "\n===== Try Catch (with finally) =====\n";
try {
     validateLoginRequest($loginRequest);
} catch (\Throwable $th) {
     // var_dump($t->getTrace());
     echo $th->getTraceAsString() . PHP_EOL;
     echo "Error: {$th->getMessage()}" . PHP_EOL;
} finally {
     echo "Error gak error dijalankan" . PHP_EOL;
}