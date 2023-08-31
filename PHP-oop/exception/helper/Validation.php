<?php

require_once "exception/ValidationException.php";

function validateLoginRequest(User $request)
{
     if (!isset($request->username)) {
          throw new ValidationException("Username required");
     } else if (!isset($request->password)) {
          throw new ValidationException("Password required");
     } else if (trim($request->username) == '') {
          throw new Exception("Username is empty");
     } else if (trim($request->password) == '') {
          throw new Exception("Password is empty");
     }
}