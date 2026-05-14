<?php

function greet(string $name = "default name")
{
    echo "hello $name" . "\n";
}

function add(int $number1, int $number2): int
{
    return $number1 + $number2;
}


greet();
echo add(1, 5) . "\n";


//variable as callable

$say = function (string $name = "default value"){
    echo "I say $name \n";
};

$say();
$say("james");