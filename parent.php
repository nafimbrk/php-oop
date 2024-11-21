<?php

require_once "data/shape.php";

use data\{shape, rectangle};

$shape = new shape();
echo $shape->getcorner();

$rectangle = new rectangle();
echo $rectangle->getcorner();
echo $rectangle->getparentcorner();





