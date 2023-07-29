<?php
// saat membuat class abstract artinya class tersebut tidak bisa dibuat sebagai objek secara langsung, hanya bisa diturunkan
// (turunan nya bisa dibuat objek jika turunan nya juga bukan abstract class)
// untuk membuatnya dengan keyword  abstract NamaClass (sehingga dapat dijadikan kontrak class child nya)


namespace Location;

abstract class Location{
     public string $name;
}

class City extends Location{
     
}
class Province extends Location{

}
