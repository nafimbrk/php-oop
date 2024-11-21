<?php

// import
// untuk mengimport class, function atau constant dari namespace
// kalo pakai use kita gk bisa mengimport class yg sama namanya, karena akan eror walaupun namespacenya berbeda

require_once "data/conflict.php";
require_once "data/helper.php";

use data\one\conflict;
// use data\two\conflict;  error
use function helper\helpme;
use const helper\APPLICATION;

$conflict1 = new conflict();
$conflict2 = new data\two\conflict();

helpme();
echo APPLICATION;