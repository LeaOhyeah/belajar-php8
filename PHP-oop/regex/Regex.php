<?php

echo "\n===== preg_match_all =====\n";

$match = [];
$result = (bool) preg_match_all("/lea|alyu/i", "Lea Alyu Maulana R", $match);
var_dump($result);
print_r($match);


echo "\n===== preg_replace =====\n";

$result = preg_replace("/anjing|bangsat/i", "***", "dasar anjing bangsat");
echo $result . PHP_EOL;


echo "\n===== preg_split =====\n";

$result = preg_split("/[\s,-]/", "Lea,Alyu M-R");
var_dump($result);