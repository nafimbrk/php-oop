<?php

namespace Data\Traits;

trait SayGoodBye
{
    public function GoodBye(?string $name): void
    {
        if (is_null($name)) {
            echo "good bye \n";
        } else {
            echo "good bye $name \n";
        }
    }
}

trait SayHello
{
    public function hello(?string $name): void
    {
        if (is_null($name)) {
            echo "hello \n";
        } else {
            echo "hello $name \n";
        }
    }
}

trait HasName
{
    public string $name;
}

// di trait kita juga bisa menambahkan abstract function
// jika ada abstract function di trait, maka function tersebut harus di override di class yg menggunakan trait tersebut
trait CanRun
{
    public abstract function run(): void;
}

// trait overriding
// jika sebuah class memiliki parent class yg memiliki function yg sama dgn function di trait, maka secara otomatis trait akan mengoverride function tersebut
// namun jika kita membuat function yg sama di class nya, maka secara otomatis kita akan mengoverride function di trait
// posisinya seperti ini parentclass = override by => trait = override by => childclass (kalo di parent class punya function dia akan teroverride sama di trait(yg ada di trait) ketika memasukkan trait, tapi kalo bikin function di child class nya maka trait ini akan teroverride sama child class)
class ParentPerson
{
    public function goodBye(?string $name): void
    {
        echo "good bye in person \n";
    }

    public function hello(?string $name): void
    {
        echo "hello in person \n";
    }
}


// sebelumnya kita sudah tahu bahwa class bisa menggunakan trait lebih dari satu
// lantas bagaimana dgn trait yg menggunakan trait lain?
// trait bisa menggunakan trait lain, mirip seperti interface yg bisa implement interface lain
trait All
{
    // trait visibility override
    // selain melakukan override functiion di class, kita juga bisa melakukan override visibility function yg terdapat di trait
    // namun untuk melakukan ini tidak perlu membuat function baru di class, kita bisa gunakan secara sederhana ketika menggunakan trait nya
    use SayGoodBye, SayHello, HasName, CanRun {
        // hello as private;
        // goodBye as private;
    }
}

class Person extends ParentPerson
{
    use All;
    
    public function run(): void
    {
        echo "person $this->name is running \n";
    }
}
