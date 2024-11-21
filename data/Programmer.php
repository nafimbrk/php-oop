<?php
// kemampuan sebuah object berubah bentuk menjadi bentuk lain
// ini erat hubungannya dengan inheritance

class Programmer {
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}

class FrontendProgrammer extends Programmer {}
class BackendProgrammer extends Programmer {}

// polymorphism
class Company {
    public Programmer $programmer;
}

// function argument polymorphism
function sayHelloProgrammer(Programmer $programmer) {
    // type check dan casts
    // mengecek tipe data sebuah object dari class tertentu atau bukan
    if ($programmer instanceof FrontendProgrammer) {
        echo "hello frontend programmer $programmer->name \n";
    } else if ($programmer instanceof BackendProgrammer) {
        echo "hello backend programmer $programmer->name \n";
    } else if ($programmer instanceof Programmer) {
        echo "hello programmer $programmer->name \n";
    }
}
