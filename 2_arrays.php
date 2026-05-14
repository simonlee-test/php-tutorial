<?php

//numeric array - because the key is numeric
/* 
array(3) {
  [0]=>
  string(3) "red"
  [1]=>
  string(5) "green"
  [2]=>
  string(4) "blue"
}*/
$colors = ['red', 'green', 'blue'];
var_dump($colors);
var_dump($colors[0]);
echo $colors[1] . "\n";


//associated arrary (dict in python) - key is string
/*
array(2) {
  ["name"]=>
  string(5) "Chris"
  ["age"]=>
  int(40)
}
*/
$user = [
    'name' => 'Chris',
    'age' => 40,
];

var_dump($user);
echo $user["name"] . "\n";


$blogpost = [
    "title" => "PHP 8.4",
    "author" => [
        'name' => 'John',
        "role" => "editor",
    ],
    "comments" => [
        [
            "user" => "Jane",
            "text" => "Great article!"
        ],
    ]
];

var_dump($blogpost);
echo $blogpost['comments'][0]['text'];
echo "\n";

//append element at the end of the array
$colors = ['red', 'green', 'blue'];
$colors[] = 'yellow';
$colors[] = []; //add empty array
var_dump($colors);

//check the length of the array
var_dump(count($colors)); //return 5

if (count($colors) > 4){
    var_dump("It is bigger than 4!");
}

//isset method - determine whether a variable is declared and its value is not null
if (isset($colors)){
    var_dump(true);
}

// isset method check of key exists
isset($user['email']);          // Check if key exists

//in_array - check if a value exists
in_array('red', $colors);       // Check if value exists

//unset method - remove element from an array
unset($colors[1]);
var_dump($colors);

// Mixed array
$mixed = [
	42,                  // index 0
	'key' => 'value',    // key 'key'
	'another value'      // index 1
];