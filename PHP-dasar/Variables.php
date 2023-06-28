<?php
// variable variables adalah pembuatan variable dengan nama nilai variable
// fitur ini mungkin akan jarang digunakan karena akan membuat program membingungkan

echo "\n===== Variable variables =====\n";

$variable = "nilai";
$$variable = "data variable variables";

echo $variable;
echo "\n";
echo $nilai;

// tanpa mendeklarasikan variable $nilai, variable $nilai dibuat dari nilai $variable
