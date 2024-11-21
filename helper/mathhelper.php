<?php

// static keyword

namespace helper;

class mathhelper {
    static public string $name = "mathhelper";

    static public function sum(int ...$numbers): int {
        $total = 0;
        foreach ($numbers as $number) {
            $total += $number;
        }
        return $total;
    }
}