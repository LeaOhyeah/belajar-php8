<?php
// kadang ada kebutuhan untuk menduplikasi objek dari objek yang sudah ada, 
// benar-benar butuh menduplikat data bukan cuma menggunakan data yang sama
// dari pada membuat objek baru dan menyalin semua properties secara manual, terdapat keyword clone untuk melakukan itu

echo "\n===== Cloning =====\n";

$data = [
     'name' => 'Student',
     'value' => '100',
];
$student = (object) $data;

$student2 = clone $student;

echo $student == $student2 ? 'sama' : 'beda' . PHP_EOL;
echo PHP_EOL;


echo "\n===== Cloning Access Modifier (Visibility) =====\n";
class Student
{
     public string $name;
     private string $value;

     public function setValue($data)
     {
          $this->value = $data;
     }
}
$student3 = new Student();
$student3->name = 'Udin';
$student3->setValue('30');

$cloneStudent3 = clone $student3;

var_dump($cloneStudent3);


echo "\n===== Function __clone =====\n";
// jika kita ingin melakukan modifikasi pada hasil cloning, kita bisa membuat function __clone di dalam class
// function ini akan otomatis dipanggil saat cloning selesai dilakukan
// kita bisa memodifikasi seperti menghapus property yang tidak ingin diduplikat

class TheStudent
{
     public string $name;
     private string $value;
     private string $password = 'nisn'; 

     public function setValue($data)
     {
          $this->value = $data;
     }

     public function __clone()
     {
          unset($this->password);
          $this->name = "$this->name clone";
     }
}

$theStudent = new TheStudent();
$theStudent->name = 'Lea';
$clone = clone $theStudent;
var_dump($clone);
