<?php

// anonymous class
// class tanpa nama
// kemampuan mendeklarasikan class sekaligus menginstansiasi objectnya secara langsung
// sangat cocok untuk kasus membuat implementasi interface atau abstract class sederhana, tanpa harus membuat implementasi class nya

// constructor di anonymous class
// ketika pemanggilan class tambahkan () untuk memasukan argument constructor nya

interface helloworld {
    function sayhello(): void;
}


// biasa
// class samplehelloworld implements helloworld {
//     public function sayhello(): void {
//         echo "hello world";
//     }
// }

// $helloworld = new samplehelloworld();
// $helloworld->sayhello();


// anonymous class
$helloworld = new class("eko") implements helloworld {

    private string $name;

    // constructor di anonymous class
    public function __construct(string $name)
    {
        $this->name = $name;
    }
    function sayhello(): void {
        echo "hello $this->name";
    }
};

$helloworld->sayhello();