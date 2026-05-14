<?php

//make sure we have access to all the classes inside src directory

use User\WeatherApp\WeatherService;

require_once __DIR__ . '/vendor/autoload.php';

if ($argc < 2){
    echo 'Correct Usage: php weather.php city';
    exit(1);
}

$weatherService = new WeatherService();

// $city = 'Vienna';

//getting second argement from the CLI because the first argument is weather.php
$city = $argv['1'];

echo "Getting weather for $city... \n";

$weather = $weatherService ->getWeather($city);

echo "\n";
echo "City : " . $weather['city'] . "\n";
echo "Temperature : " . $weather['temperature'] . "\n";
echo "Description : " . $weather['description'] . "\n";
echo "Humidity : " . $weather['humidity'] . "\n";