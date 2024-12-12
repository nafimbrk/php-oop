<?php

require_once "data/sayGoodBye.php";

use Data\Traits\{Person, SayHello, SayGoodBye};

$person = new Person();
$person->goodBye("joko");
$person->hello("budi");

$person->name = "eko";
var_dump($person);

$person->run();