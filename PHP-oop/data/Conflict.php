<?php
// saat membuat aplikasi pasti kita membuat banyak class, 
// jika terlalu banyak kadang menyulitkan untuk mencari dan mengklasifikasikannya
// PHP memiliki fitur namespace (untuk menyimpan class bukan file) dan bisa nested
// jika ingin mengakses class didalam namespace kita perlu menyebutkan nama namespace nya
// namespace bagus ketika kita memiliki class dengan nama yang sama agar tidak terjadi error

// jika tidak menggunakan kurung kurawal maka satu file class tersebut tersimpan dalam satu namespace
namespace Data\One {
     class Conflict
     {

     }

     class Other{
          
     }

     class Dumy{

     }

}

namespace Data\Two {
     class Conflict
     {

     }
}