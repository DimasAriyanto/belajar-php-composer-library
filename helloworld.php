<?php

require_once __DIR__ . '/vendor/autoload.php';
// require_once __DIR__ . '/src/Data/People.php';
// require_once realpath("vendor/autoload.php");

use KuliahProgrammer\Belajar\Customer;

$people = new Customer("Dimas");

echo $people->sayHello("Lia");
