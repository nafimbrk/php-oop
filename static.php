<?php

require_once "helper/mathhelper.php";

use helper\mathhelper;

// gk bisa via object
// $mathhelper = new mathhelper();
// echo $mathhelper->name;

echo mathhelper::$name;
mathhelper::$name = "eko kurniawan";
echo mathhelper::$name;

$result = mathhelper::sum(12, 46, 25, 57, 89);
echo "result : $result";