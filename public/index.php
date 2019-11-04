<?php
require __DIR__ . '/../vendor/autoload.php';

use App\AppWcs\Hello;
use HelloWorld\SayHello;

$appWcsHello = new Hello();
echo $appWcsHello->talk();

echo "<br />";

$helloWorld = new SayHello();
echo $helloWorld->world();
