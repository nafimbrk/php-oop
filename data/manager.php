<?php

// inheritance
// inheritance / pewarisan adl kemampuan untuk menurunkan sebuah class ke class lain
// dml artian bisa membuat class parent dan class child
// class child hanya bisa punya satu class parent, namun satu class parent bisa punya banyak class child
// saat sebuah class diturunkan, maka semua properties dan function yg ada di class parent, secara otomatis akan dimiliki oleh class child
// untuk melakuan pewarisan, di class child, harus menggunakan kata kunci extends lalu diikuti dgn nama class parent nya

class manager {

    var string $name;

    // constructor overriding
// constructor juga bisa di deklarasikan ulang di class childnya
// sebenarnya di php, bisa mengoverride function dgn argument yg berbeda, namun sgt tdk di sarankan
// jika kita mengoverride function dgn argument berbeda, maka php akan menampilkan warning
// namun berbeda dgn constructor overriding, kita boleh meng override dgn mengubah argumentnya, namun direkomendasikan utk memanggil parent constructor
   var string $title;

    public function __construct(string $name = "", string $title = "manager"){
        $this->name = $name;
        $this->title = $title;
    }

    function sayhello(string $name): void {
        echo "hi $name, my name is manager $this->name \n";
    }

}

// function overriding
// function overriding adl kemampuan mendeklarasikan ulang function di child class, yg sudah ada di parent class
// saat kita melakukan proses overriding tersebut, secara otomatis ketika kita membuat object dari class child, function yg di class parent tdk bisa diakses lagi
class vicepresident extends manager {

    public function __construct(string $name = ""){
        // tdk wajib, tapi direkomendasikan
        parent::__construct($name, "VP");        
    }

    function sayhello(string $name): void {
        echo "hi $name, my name is vp $this->name";
    }
}