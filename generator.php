<?php

// sebelumnya tahu bahwa untuk membuat object yg bisa di iterasi, kita menggunkan iterator
// namun pembuatannya secara manual sangatlah ribet
// di php terdapat fitur generator, yg bisa kita gunakan untuk membuat itertator secara otomatis hanya dgn menggunakan kata kunci yield

// pakai iterator
function getgenap(int $max): Iterator
{
    $array = [];

    for ($i = 0; $i <= $max; $i++) {
        if ($i % 2 == 0) {
            $array[] = $i;
        }
    }

    return new ArrayIterator($array);
}

foreach (getgenap(100) as $value) {
    echo "genap : $value \n";
}


// pakai generator
function getganjil(int $max): Iterator
{
    for ($i = 0; $i <= $max; $i++) {
        if ($i % 2 == 1) {
            yield $i;
        }
    }
}

$ganjil = getganjil(100);
foreach ($ganjil as $value) {
    echo "ganjil : $value \n";
}