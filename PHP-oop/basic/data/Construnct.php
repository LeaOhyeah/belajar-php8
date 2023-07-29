<?php
// CONSTRUCTOR
// saat membuat object kita seperti memanggil function karena menggunakan (), 
// di PHP kita bisa membuat constructor (function yang pertama kali dipanggil ketika object dibuat)
// mirip seperti function kita bisa memberi parameter tetapi tidak memiliki return
// ketika memberi parameter pada construct maka semua object yang dibuat harus mengirim argument untuk parameter tersebut
// nama constructor pada PHP harus __construct()

// DESTRUCTOR
// adalah kebalikan dari constructor, jika constructor adalah function yang dijalankan ketika object dibuat
// maka destructor adalah function yang dijlankan ketika object dihapus dari memory
// biasanya object dihapus ketika sudah tidak digunakan atau aplikasi mati
// untuk membuatnya dengan __destruct() tanpa parameter
// cocok untuk menutup koneksi database atau menutup proses penulisan file agar tidak terjadi memory leak



class Construct
{
     public function __construct(string $inputName, ?string $inputAddress)
     {
          $this->name = $inputName;
          $this->address = $inputAddress;
          $this->hi();
     }

     function hi()
     {
          echo "Hi $this->name" . PHP_EOL;
     }

     var string $name;
     var ?string $address;
     var string $country = 'Indonesia';

     function __destruct()
     {
          echo "Object $this->name is destructed" . PHP_EOL;
     }
}