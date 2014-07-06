<?php
// $age = 22;
// $is_adult = $age >= 18 ? true : false;

// [ condition ] ? [ value if true ] : [ value if false ];
// So this line of code is asking: Is the age asked greater than 
// or equal to 18. Tell me true or false.

// $can_see_die_hard = ($age >= 18) ? "yes!" : "no, try Disney";
// This is short hand for if/else statements. This is equal to the next line of code. --->

// if ($age >= 18) {
// 	$can_see_die_hard = "yes!";

// } else {
// 	 $can_see_die_hard = "no, really, Disney";
// }

$a = 10;
$b = '10';

if ($a === $b) {
  echo "$a is identical to $b\n";
} elseif ($a == $b) {
  echo "$a is equal to $b\n";
} else {
  echo "$a is not equal to $b\n";
}

$a = 5;
$b = 10;
$c = '10';

// Add an else clause to the next two statements
if ($a < $b) {
  echo "$a is less than $b\n";
} else { 
  echo "$a is greater than $b\n";
}

if ($b > $a) {
  echo "$b is greater than $a\n";
} else { 
  echo "$b is less than $a\n";
}

// Shorten the next 2 statements into an if/else
if ($b >= $c) {
  echo "$b is greater than $c\n";
} else{
  echo "$b is less than $c\n";
}

if ($b <= $c) {
  echo "$b is less than $c\n";
} else {
  echo "$b is greater than $c\n";
}

// combine the next 4 conditionals into 
// one if/else/elseif block that checks in order for:
// identical, equal, not identical, not equal
if ($b == $c) {
  echo "$b is equal to $c\n";
} elseif ($b === $c) {
  echo "$b is identical to $c\n";	
} elseif ($b != $c) {
  echo "$b is not equal to $c\n";
} elseif ($b !== $c) {
  echo "$b is not identical to $c\n";
}
?>
