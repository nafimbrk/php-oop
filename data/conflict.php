<?php

// namespace
// untuk menyimpan class"
// analoginya seperti folder untuk menyimpan file dan namespace untuk menyimpan class
// bisa nested dan jika ingin mengakses class yg terdapat di namespace, kita perlu menyebutkan nama namespacenya
// namespace bagus jika ada nama class yg sama, dgn menggunakan namespace nama class yg sama tidak akan menjadikan error di php
// kalo mau buat buat sub namespace, gunakan \ setelah namespace sebelumnya
// kalo gk menggunakan {} tapi ; artinya satu file php namespace nya itu

namespace data\one {
    class conflict {

    }
    class sample {

    }
    class dummy {
        
    }
}

namespace data\two {
    class conflict {

    }
}