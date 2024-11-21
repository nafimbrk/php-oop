<?php

require_once "data/student.php";

$student1 = new student();
$student1->id = "1";
$student1->name = "eko";
$student1->value = 100;

$string = (string) $student1;
echo $string . "\n";

// bisa seperti ini
echo $student1;