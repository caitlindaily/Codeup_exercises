<?php

$a = 5;
$b = 10;
$c = '10';

// Output the Appropriate Results:

if ($a < $b) {
  
  echo "$a is less than $b\n";
}

if ($b > $a) {

  echo "$b is greater than $a\n";
}

if ($b >= $c) {

  echo "$b is greater than or equal to $c\n";
}

if ($b <= $c) {

  echo "$b is less than or equal to $c\n";
}

if ($b == $c) {

  echo "$b is equal to $c\n";
}

if ($b <= $c) {

  echo "$b is less than or equal to $c\n";
}

if ($b != $c) {

  echo "$b is not equal to $c\n";
}

if ($b === $c) {

  echo "$b is not identical to $c\n";
}


//Beginnings of IF/ELSE statements

if($a == $b) {
  echo "$a is equal to $b\n";
} else {
  echo "This statement is false.\n";
}

$won_lottery = FALSE;
$is_raining = TRUE;

if($won_lottery && $is_raining) {
  echo "I'm buying a new car!\n";
} else {
  echo "I shouldn't buy a car if I didn't win the lottery.\n";
}





















?>