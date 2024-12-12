<?php

// jika menggunakan lebih dari satu trait, lalu terdapat function yg sama di trait tersebut
// maka akan menyebabkan konflik
// jika terjadi konflik seperti ini, kita bisa mengatasinya dgn menggunakan kata kunci insteadof
trait A
{
    function doA(): void
    {
        echo "a" . "\n";
    }
    function doB(): void
    {
        echo "b" . "\n";
    }
}

trait B
{
    function doA(): void
    {
        echo "A" . "\n";
    }
    function doB(): void
    {
        echo "B" . "\n";
    }
}

class Sample
{
    use A, B {
        A::doA insteadof B;
        B::doB insteadof A;
    }
}

$sample = new Sample();
$sample->doA();
$sample->doB();


