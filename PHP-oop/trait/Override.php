<?php

require_once "data\Person.php";

echo "\n===== Trait Overriding =====\n";
$parent = new ParentClass();
$parent->goodBy();

$child = new ChildClass();
$child->goodBy();

