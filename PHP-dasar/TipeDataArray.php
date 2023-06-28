<?php
// array adalah tipe data yang berisi kumpulan data atau kosong
// array pada php bisa diisi dengan jenis data yang berbeda-beda
// array pada php panjangnya dinamis dan tidak memiliki batas
// * cara kerja array (index: number index untuk mengambil data, element: data index, length: panjang array / jumlah index)

echo "\n===== Membuat / mendeklarasikan array =====\n";
$array1 = array(1, 2, 3, 4, 5);
$array2 = ['lea', 'lia'];

var_dump($array1);

echo "\n===== Operasi dalam array =====\n";

echo "mengakses \t: "; // dengan $array[index]
var_dump($array1[0]);

echo "mengubah \t: "; // dengan $array[index] = data
$array1[0] = 'one'; 
var_dump($array1[0]);

echo "menambah (di akhir) \t: "; // dengan $array[] = data;
$array1[] = 6;
var_dump($array1[5]);

echo "menghapus \t: "; // dengan unset($array[index]);
unset($array1[1]);
var_dump($array1);

echo "menotal \t: "; // dengan count($array);
var_dump(count($array1));