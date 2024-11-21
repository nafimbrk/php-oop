<?php

// group use declaration
// untuk mengimport banyak hal di satu namespace yg sama

require_once "data/conflict.php";
require_once "data/helper.php";

use data\one\{conflict as conflict1, dummy, sample};
use function helper\{helpme as help};
use const helper\{APPLICATION as APP};

$conflict = new conflict1();
$dummy = new dummy();
$sample = new sample();

help();
echo APP;