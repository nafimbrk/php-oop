<?php

// menggunakan foreach itu iterasi secara otomatis
// kalo mau iterasi secara manual bisa menggunakan iterator
// adl interface yg digunakan untuk iterasi, namun membuatnya iterator secara manual cukup ribet, oleh karena itu akan menggunakan arrayiterator, yaitu iterator yg menggunakan array sebagai data iterasinya
// agar class bisa di iterasi secara manual, bisa menggunakan interface iteratoraggregate, disana hanya butuh mengoverride function getiterator() yg mengembalikan data iterator

class data implements IteratorAggregate
{
    var string $first = "first";
    public string $second = "second";
    private string $third = "third";
    protected string $forth = "forth";

    // jadi ini iterasi secara manual
    // contohnya mungkin ada beberapa data yg sensitif yg gk mau di ekspose walaupun public, tinggal hilangkan saja data yg gk mau diakses di getiterator() nya
    public function getIterator(): Traversable
    {


        // return new ArrayIterator([
        //     "first" => $this->first,
        //     "second" => $this->second,
        //     "third" => $this->third,
        //     "forth" => $this->forth
        // ]);

        $array = [
            "first" => $this->first,
            "second" => $this->second,
            "third" => $this->third,
            "forth" => $this->forth
        ];

        // return new ArrayIterator($array);

        $iterator = new ArrayIterator($array);
        return $iterator;
    }

    // pakai generator
    // public function getIterator(): Traversable
    // {
    //        yield "first" => $this->first;
    //        yield "second" => $this->second;
    //        yield "third" => $this->third;
    //        yield "forth" => $this->forth;
    // }
}

$data = new data();

foreach ($data as $property => $value) {
    echo "$property : $value \n";
}


