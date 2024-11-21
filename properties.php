<?php

require_once "data/person.php";

$person = new person("hendri", "lamongan");

// manipulasi properties
// untuk mengakses field butuh kata kunci -> setelah nama object dan diikuti nama fieldnya

// mengubah
$person->name = "eko";
$person->addreas = "subang";
$person->country = "indonesia";

var_dump($person);

// ngambil
echo "name : $person->name \n";
echo "addreas : $person->addreas \n";
echo "country : $person->country \n";

// bisa buat object lagi dan diisi data yg berbeda
$person2 = new person("jojon", "jakarta");
$person2->name = "budi";
// $person2->name = null; error
$person2->addreas = null;

var_dump($person2);

// $person2->name = []; error