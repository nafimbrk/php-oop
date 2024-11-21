<?php

require_once "data/person.php";

$eko = new person("eko", "subang");
$joko = new person("joko", "subang");

echo "program selesai"; // setelah program selesai object eko dan joko ini akan dihapus dari memori dan destructor nya otomatis akan dipanggil