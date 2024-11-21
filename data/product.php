<?php
/*        class   subclass   world
public       y         y        y
protected    y         y        n
privat       y         n        n
*/
class product {
    protected string $name;
    protected int $price;

    public function __construct(string $name, int $price) {
        $this->name = $name;
        $this->price = $price;
    }

    // function untuk get data 
    public function getname(): string {
        return $this->name;
    }

    public function getprice(): int {
        return $this->price;
    }

}

class productdummy extends product {
    public function info() {
        echo "name $this->name";
        echo "price $this->price";
    }
}