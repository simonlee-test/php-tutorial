<?php


class Product
{
    /* Old way of defining classess - similar to java
    public string $name;
    public int $price;

    //constructor
    public function __construct(string $name, float $price)
    {
        $this->name = $name;
        $this->price = $price;
    } */

    //same as above
    public function __construct(public string $name, public float $price) {}

    public function isExpensive(): bool{
        return $this->price > 100;
    }

    public function hasDiscount(): bool {
        return $this->price < 100;
    }

    public function getDescription(): string{
        return "$this->name costs $this->price USD";
    }
    
}

$product = new Product("Laptop", 1010);
var_dump($product);
var_dump(isset($product->name));
echo $product -> name . "\n";
var_dump($product -> isExpensive());
var_dump($product->getDescription());


//Inheritance
class DigitalProduct extends Product{
    public function getLink(): string{
        return 'app-link';
    }
}

$new_product = new DigitalProduct("spofify", 99);

var_dump($new_product->getDescription());
var_dump($new_product->getLink());