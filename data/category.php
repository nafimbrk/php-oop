<?php

// encapsulation
// memastikan data sensitif sebuah object tersembunyi dari akses luar
// bertujuan agar bisa menjaga agar data sebuah object tetap baik dan valid
// untuk mencapai ini, biasannya akan membuat semua properties menggunakan privat, sehingga tdk bisa diakses atau di ubah dari luar
// agar bisa diubah kita akan menyediakan function utk mengubah dan mendapatkan properties tersebut
// jadi setiap bikin properti kita akan bikin getternya dan juga setternya

// getter dan setter
// di php proses getter dan setter sudah dibuat standarisasinya, dimana bisa menggunakan getter dan setter method

// standar cara pembuatan functionnya
/*
getxxx()            setxxx(value)
*/

class category {
    private string $name;
    private bool $expensive;

    public function getname(): string {
        return $this->name;
    }

    public function setname(string $name): void {
        // validation di setter
        // jika kita trim data namenya != sring kosong baru kita mau terima datanya
        if (trim($name) != "") {
            $this->name = $name;
        }
         
    }

    public function getexpensive(): bool {
        return $this->expensive;
    }

    public function setexpensive(bool $expensive): void { 
            $this->expensive = $expensive;
         
    }

}
