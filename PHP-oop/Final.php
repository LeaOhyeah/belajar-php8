<?php
// saat menggunakan keyword final maka class tersebut tidak dapat diwariskan lagi
// begitu juga pada function (tidak bisa di override lagi) 
// final class ClassName atau final public function namaFunction


class SocialMedia
{
     public string $name;
}

class Facebook extends SocialMedia
{
     public function login()
     {
          return true;
     }
}

class FakeFacebook extends Facebook
{
     public function login()
     {
          return false;
     }
}