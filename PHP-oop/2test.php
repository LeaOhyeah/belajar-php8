<?php
function hello(?string $name): string
{
     return "hello $name";
}

echo hello(null);