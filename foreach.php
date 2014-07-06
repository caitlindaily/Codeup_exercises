<?php

// $todos = ['A', 'B', 'C'];

for ($i = 0; $i < count($todos); $i++){
  $todo = $todos[$i];
  echo $todo . PHP_EOL;
}

// //The option using foreach

$todos = ['A', 'B', 'C'];

foreach($todos as $todo) {
  echo "{$todo}\n";
}	

//This eliminates the step neeeded in defining your "i" variable.
//Best used for listing arrays.

$numbers = array(1, 2, 3, 4, 5);

foreach ($numbers as $value) {
  echo ("\$number has a value of {$value}\n");
}	
