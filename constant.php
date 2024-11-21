<?php

require_once "data/person.php";

define("APP", "Belajar PHP Oop");
const APP_VER = "1.0.0";

echo APP;
echo "\n";
echo APP_VER;
echo "\n";

// mengakses constant di class
echo person::AUTHOR;
