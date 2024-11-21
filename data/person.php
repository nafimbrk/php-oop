<?php
// class adalah blueprint, prototype atau cetakan untuk mebuat object
// di php nama file dan class boleh berbeda, cuma untuk mempermudah disarankan bikinnya sama
class person {

    // constant di class
    // constant default nempelnya di class sedangkan propertieske object, jadi untuk memangil constant gk bisa menggunakan object tapi menggunakan class nya
    const AUTHOR = "pzn";

    // properties
    // adl data yg bisa kita sisipkan di dlm object

    // properties type declaration
    // sama seperti di function, di properties pun, bisa membuat type declaration
    // jika mencoba mengubah properties dgn type yg berbeda, maka otomatis akan error
    // ingat, php memiliki fitur type jungling, yg secara otomatis bisa mengkonversi ke tipe data lain

    var string $name;
    // nullable properties
    // saat menambahkan type declaration di properties/di function argument, maka secara otomatis kita gk bisa mengirim data null ke dlm properties/function argument tersebut
    // di php ada nullable type, jadi kita bisa mengirim data null ke properties/function argument
    // ? tipenya bisa null atau tidak
    // ini tdk hanya di properties bisa juga di function argument
    var ?string $addreas = null;
    // default properties value(ini mirip seperti default value di function argument, jika tdk diubah diobject maka properties akan memiliki value tersebut)
    var string $country = "indonesia";


    // constructor
    // di dlm class php kita bisa membuat constructor, ini adalah function yg akan di panggil saat pertama kali object dibuat
    // mirip kayak function, bisa memberi parameter pada constructor yg membedakan adl gk ada return valuenya
    // nama constructor di php haruslah __construct()
    function __construct(string $name, ?string $addreas){ // ini mau pake public atau gk bebas
        $this->name = $name;        
        $this->addreas = $addreas;        
    }
    
    // selain properties bisa juga menambahkan function ke object
    // mengakses function menggunakan tanda -> lalu nama methodnya. sama seperti mengakses properties
    function sayhello(?string $name){
    // this keyword
    // saat membuat kode di dlm function di dlm class, bisa menggunakan kata kunci this untuk mengakses object saat ini
    // misal kadang kita butuh mengakses properties atau function lain di class yg sama
    // $this adl variable yg mengacu ke object saat ini
    if (is_null($name)) {
        echo "hello, my name is $this->name \n";
    } else {
        echo "hello $name, my name is $this->name \n";
    }
    }

    // self keyword
// jika di dlm class(misal di function) saat mau mengakses constant kita perlu meggunakan namaclass::NAMA_CONSTANT
// namun jika di dlm class yg sama kita bisa pakai kata kunci self untuk mempermudah
// ini mirip seperti this, bedanya kalo this mengakses object saat ini sedangkan self mengakses class saat ini
function info() {
    echo "Author : " . self::AUTHOR;
}

function __destruct()
{
    echo "object person $this->name is destroyed";
}


}




// destructor
// function yg akan dipanggil ketika object dihapus dari memory
// biasanya ketika object tersebut sudah tidak lagi dugunakan, atau ketika aplikasi akan mati
// khusus untuk destructor, kita tidak boleh menambahkan function argument
// dalam penggunaan sehari" cocok untuk menutup koneksi ke database






