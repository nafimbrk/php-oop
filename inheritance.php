<?php

require_once "data/manager.php";

// mengakses method parent
$manager = new manager();
$manager->name = "budi";
$manager->sayhello("joko");

$vp = new vicepresident();
$vp->name = "eko";
$vp->sayhello("heru");