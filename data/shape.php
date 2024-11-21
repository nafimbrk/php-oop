<?php

// parent keyword
// kadang ingin mengakses function yg terdapat di class parent yg sudah terlanjur kita override di class child
// untuk mengakses function milik class parent, bisa menggunakan kata kunci parent
// sederhananya, parent digunakan untuk mengakses class parent

namespace data;
    class shape {
        public function getcorner() {
            return 0;
        }
    }

    class rectangle extends shape {
        public function getcorner() {
            return 4;
        }

        public function getparentcorner() {
            return parent::getcorner();  // jika kita return $this->getcorner(); maka yg di akses adl getcorner yg 4
        }
    }