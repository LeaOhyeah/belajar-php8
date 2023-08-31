<?php

class ValidationFunction
{
     static function validateReflection($request)
     {
          $reflection = new ReflectionClass($request);
          $properties = $reflection->getProperties(ReflectionProperty::IS_PUBLIC);
          foreach ($properties as $property) {
               if (!$property->isInitialized($request)) {
                    throw new Exception("Invalid $property->name");
               } else if (trim($property->getValue($request)) == '') {
                    throw new Exception("Invalid this $property->name");
               }
          }
     }

     // static function validateUser(User $user)
     // {
     //      if (trim($user->username) == '' || !isset($user->username)) {
     //           throw new Exception("Invalid username");
     //      } else if (trim($user->password) == '' || !isset($user->password)) {
     //           throw new Exception("Invalid password");
     //      }
     // }

     // static function validateProduct(Product $product)
     // {
     //      if (trim($product->name) == '' || !isset($product->name)) {
     //           throw new Exception("Invalid name");
     //      } else if (trim($product->price) == '' || !isset($product->price)) {
     //           throw new Exception("Invalid price");
     //      }
     // }

}