<?php

// iterasi ke semua properties yg terdapat di object
// secara default, hanya properties yang public yang bisa diakses oleh foreach



class data
{
    var string $first = "first";
    public string $second = "second";
    private string $third = "third";
    protected string $forth = "forth";
}

$data = new data();

foreach ($data as $property => $value) {
    echo "$property : $value \n";
}