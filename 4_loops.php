<?php

$colors = ['red', 'green', 'blue'];

//foreach loop
foreach ($colors as $color) {
    var_dump($color);
}

foreach ($colors as $key => $color) {
    var_dump($key);
}

$invoiceItems = [
    ['item' => 'Laptop', 'price' => 1200],
    ['item' => 'Mouse', 'price' => 75],
    ['item' => 'Keyboard', 'price' => 100],
];

$totals = 0;

foreach ($invoiceItems as $item) {
    $totals += $item['price'];
}

echo $totals . "\n";

//for loop
//starting index, loop stopping condition, index update function -- just like java
for ($i = 4; $i > 0; $i--) {
    var_dump($i);
}

//while loop
$count = 0;

while ($count < 5) {
    var_dump($count);
    $count++;
}

//do while loop - it will run first time no matter what
$count = 0;

do {
    var_dump($count);
    $count++;
} while ($count < 5);

//
$users = [
    ['name' => 'John', 'newsletter' => true],
    ['name' => 'Jane', 'newsletter' => false],
    ['name' => 'Bob', 'newsletter' => true]
];

foreach ($users as $user) {

    if ($user['newsletter']) {
        var_dump("Send NL to $user[name]");
        var_dump("Send NL to {$user['name']}");
    }

}


// Regular PHP loop
$numbers = [1, 2, 3, 4, 5];
$doubled = [];

foreach ($numbers as $number) {
    $doubled[] = $number * 2;
}

var_dump($doubled);

//with Laravel Collections
// $doubled = collect([1,2,3,4,5]) -> map(fn($number) => $number * 2);
