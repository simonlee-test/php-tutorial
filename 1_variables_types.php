<?php

//variable
$status = 404;
$decimal = 404.4;
$string = "404";
$bool = true;
$text = 'Not Found';

//tell us the type and value of the variable
var_dump($status, $string, $bool);
var_dump($decimal);

//string concat - must use double quotes
$message = "404 $text";

//dot string concat
$dot_message = '404 ' . $text;

var_dump($message, $dot_message);

//type casting
$num = (int) "404";
$string = (string) 404;
$true_string = (string) true; //return "1"
$false_string = (string) false; //return "" empty string
$false_int = (int) false; //return 0
$true_int = (int) true; //return 1

var_dump($num, $string, $true_string, $false_string, $false_int, $true_int);

//automatic type coercion or type chucking
$new_int = "404" + 4; //return 408
var_dump($new_int);

$new_string = 404 . 4; //return "4044"
$new_string2 = "404" . 4; //return "4044"
var_dump($new_string);
var_dump($new_string2);