<?php
require_once "Data\Run.php";

use Data\Traits\{Orang};

echo "\n===== Abstract Trait =====\n";
$orang = new Orang("Lea");
$orang->run();