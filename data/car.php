<?php

// interface
// mirip seperti abstract class yg membedakan adl semua method otomatis abstract, tidak memiliki block
// gk boleh memiliki properties, hanya boleh memiliki constant
// tidak menggunakan extends melainkan implements
// kita bisa implements lebih dari satu interface

// interface inheritance
// child class hanya bisa punya 1 class parent
// berbeda dengan interface, sebuah child class bisa implements lebih dari 1 interface
// bahkan interface pun bisa implements interface lain, bisa lebih dari 1. namun jika interface ingin mewarisi interface lain, menggunakan extends bukan implements

namespace data;

interface hashbrand {
    function getbrand(): string;
}

interface ismaintenance {
    function ismaintenance(): bool;
}
interface car extends hashbrand {
    function drive(): void;

    function gettire(): int;
}

class avanza implements car, ismaintenance {
    function drive(): void {
        echo "drive avanza";
    }

    function gettire(): int {
        return 4;
    }

    function getbrand(): string {
        return "toyota";
    }

    function ismaintenance(): bool {
        return false;
    }
}