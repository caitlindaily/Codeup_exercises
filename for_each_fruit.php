<?php

//1.Create a file called fruit.php 
//2. Create an array of fruits. 
//3. Write a loop that prints the fruits. for||foreach	
//4. Modify the fruit array so that you have fruit name => color. Print using foreach. "Apples are red."

$fruit = [
 'Apples'  => [
   'color' => red ],	
 'Bananas' => [
   'color' => yellow ],
 'Oranges' =>[
   'color' => orange ],
 'Kiwis'  => [
   'color' => green ]			
];

foreach ($fruit as $name => $details) {
  echo $name . " are " . $details['color'] . PHP_EOL;
}

//Also can be written as
$fruits = [
 'Apples'  => 'red',	
 'Bananas' => 'yellow',
 'Oranges' => 'orange',
 'Kiwis'   => 'green'			
];

foreach ($fruits as $fruit => $color) {
  echo "{$fruit} are {$color}\n";
}