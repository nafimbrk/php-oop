<?php

// abstract function
    // saat buat abstract class kita bisa buat abstract function didlm class abstract tersebut
    // gk boleh ada block function
    // artinya wajib di override di class child
    // tidak boleh private
    
namespace data;

abstract class animal {
    public string $name;

    public abstract function run(): void;
}

class cat extends animal {
    public function run(): void {
        echo "cat $this->name is running";
    }
}
class dog extends animal {
    public function run(): void {
        echo "dog $this->name is running";
    }
}