<?php

require_once "data/person.php";

$eko = new person("dono", "london");
$eko->name = "eko";
// memanggil function
$eko->sayhello("budi");

$joko = new person("andre", "rusia");
$joko->name = "joko";
$joko->sayhello(null);


$eko->info();
$joko->info();
