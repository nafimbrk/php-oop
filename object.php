<?php
// object adalah hasil instansiasi dari sebuah class
// untuk mebuat object gunakan kata kunci new lalu nama class dan kurung ()
// membuat object tidak ada batasannya

require_once "data/person.php";

$person1 = new person("rini", "surabaya");
var_dump($person1);
$person2 = new person("roni", "jombang");
var_dump($person2);