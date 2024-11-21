<?php

// abstract class
// tidak bisa dibuat object secara langsung, hanya bisa diturunkan
// sebagai kontrak child class

namespace data;

abstract class location {
    public string $name;
}

class city extends location {

}
class province extends location {

}
class country extends location {

}



