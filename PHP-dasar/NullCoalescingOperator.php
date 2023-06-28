<?php
// akan repot jika kita ingin mengisi variable dengan mengecek terlebih dahulu sebuah data ada atau tidak, atau null atau tidak
// biasanya kita menggunakan if statement dengan function isset

echo "\n===== Jika If Statement =====\n";
$data = [];

if (isset($data['action'])) {
     $action = $data['action'];
} else {
     $action = 'nothing';
}

echo $action . PHP_EOL;

echo "\n===== Jika Null Coalescing =====\n";
$search = [];
$filterName = $search['name'] ?? 'nothing';

echo $filterName . PHP_EOL;