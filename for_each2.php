<?php

$things =[ 1,2,3,4,5];

foreach ($things as $location => $value) {
  echo "$value is at $location\n";
}

///////////////////////////////////

$things =[
  "One" => 1,
  "Two" => 2,
  "Three" => 3,
  "Four" => 4,
  "Five" =>5];

foreach ($things as $key=> $value) {
  echo "$value is at $key\n";
}

//Keys are always on the left, also can be considered "names".
//The "key" or "name" values are on the right

$things =[
  "One" => [1],
  "Two" => [1,2],
  "Three" => [1,2,3],
  "Four" => [1,2,3,4],
  "Five" =>[1,2,3,4,5]
];

foreach ($things as $key=> $value) {
	echo count($value) . " items are at location $key\n";
}


$things =[
  "One"   => ["A" => "A1", "B" => "B1"],
  "Two"   => ["A" => "A2", "B" => "B2"],
  "Three" => ["A" => "A3", "B" => "B3"],
  "Four"  => ["A" => "A4", "B" => "B4"],
  "Five"  => ["A" => "A5", "B" => "B5"] 
];

foreach ($things as $name => $value) {
	echo $name . " has an A value of " . $value["A"] . PHP_EOL;
}




