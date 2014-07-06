<?php

$nothing = NULL;
$something = '';
$array = array(1,2,3);

//TEST: If var $nothing is set, display '$nothing is SET'
function check($variable) {
  
  if (isset($variable)) {
	echo "$variable is nothing.\n";
  }
}
check($nothing);
//When this example is run, nothing will show up, meaning the test was true
//because NULL is literally nothing
//-----------------------------------
//Create a function that checks if a variable is set or empty, and display "$variable_name is SET|EMPTY"

function set_empty($var) {
  if (isset($var)) {
	echo "{$var} is SET.\n";
  } elseif (empty($var)) {
	echo "{$var} is EMPTY\n";
  }
}
set_empty($nothing);
set_empty($something);
set_empty($array);
//----------------------------------
// TEST: If var $nothing is empty, display '$nothing is EMPTY'

function var_empty($var) {
  if (empty($var)){
	echo "$var is EMPTY\n";
  }
}
var_empty($nothing);
//---------------------------------------
// TEST: If var $something is set, display '$something is SET'
function var_set($var) {
  if (isset($var)) {
	echo "$var is SET.\n";
  }
}
var_set($something);
//---------------------------------------
// Serialize the array $array, and output the results
$serial = serialize($array);

print_r($serial);
//--------------------------------------
// Unserialize the array $array, and output the results
$unserial = unserialize($serial);

print_r($unserial);

