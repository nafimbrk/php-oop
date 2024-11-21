<?php

// import alias
// untuk membuat nama lain dari class, function atau constant
// biasanya untuk mengatasi jika nama class nya sama

require_once "data/conflict.php";
require_once "data/helper.php";

use data\one\conflict as conflict1;
use data\two\conflict as conflict2;
use function helper\helpme as help;
use const helper\APPLICATION as APP;

$conflict1 = new conflict1();
$conflict2 = new conflict2();

help();
echo APP;