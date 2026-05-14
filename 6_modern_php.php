<?php


// Old way
class OldUser
{
    public string $name;
    public string $email;

    public function __construct(string $name, string $email)
    {
        $this->name = $name;
        $this->email = $email;
    }
}

// Modern way - constructor property promotion
class NewUser
{
    public function __construct(
        //readonly - make sure that a field is immutable after initialization
        public readonly string $name,
        public string $email,
    ) {}
}

$status = 200;
//old switch cases
switch ($status) {
    case 200:
        $result = 'success';
        break;
    case 404:
        $result = "not found";
        break;
    case 500:
        $result = "server error";
        break;
    default:
        $result = 'unknown status';
}

var_dump($result);

$status = 500;
//new switch cases - match expression
$result = match ($status) {
    200 => 'success',
    404 => 'not found',
    500 => 'server error',
    default => 'unknown status',
};

var_dump($result);

//null safe operator
class Address
{
    public function getCountry()
    {
        return 'Austria';
    }
}

class Order
{
    public function getAddress()
    {
        return null;
    }
}

$order = new Order();

$country = $order->getAddress()?->getCountry();

var_dump($country);

//optional member variables.
class Product
{
    public function __construct(
        public string $name,
        public float $price,
        ?float $beforePrice = null,
        ?float $afterPrice = null,
    ) {}
}

//named arguemnts when initializing Product object
$product = new Product(
    name: 'Camera',
    price: 100,
    afterPrice: 123,
);

var_dump($product);