<?php

require_once "data/student.php";

$student1 = new student();
$student1->id = "1";
$student1->name = "eko";
$student1->value = 100;
$student1->setsample("XXX"); // semua property entah itu public, protected, atau private semuanya akan di cloning, kalo manual gk bisa ngecloning data yang private

var_dump($student1);

$student2 = clone $student1;

var_dump($student2);

// cara manual clone
// $student2 = new student();
// $student2->id = $student1->id;
// $student2->name = $student1->name;
// $student2->value = $student1->value;

// alur __clone()
// $student1 => clone $student2 => $student2->__clone()