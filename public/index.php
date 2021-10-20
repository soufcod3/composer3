<?php
require __DIR__ . '/../vendor/autoload.php';

use CowSay\Cow;

$bessie = new Cow('Hello, Farm!');

// store the output in a variable
$bessie->setTongue();

echo $bessie;