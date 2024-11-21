<?php

// konversi dari tipe data array ke object dan sebaliknya

$array = [
    "fn" => "eko",
    "mn" => "kurniawan",
    "ln" => "khanedy"
];

$object = (object) $array;

var_dump($object);

echo "first name : $object->fn \n";
echo "middle name : $object->mn \n";
echo "last name : $object->ln \n";

$arraylagi = (array) $object;

var_dump($arraylagi);

