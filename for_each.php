<?php

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

//Create a loop that will echo out every value, including those nested in arrays
foreach ($things as $thing) {
	if (is_int($thing)){
		echo "{$thing}\n";
	}elseif (is_float($thing)) {
		echo "{$thing}\n";
	}elseif (is_bool($thing)) {
		echo "{$thing}\n";
	}elseif (is_array($thing)) {
		echo "{$thing}\n";
	}elseif (is_null($thing)) {
		echo "{$thing}\n";
	}elseif (is_string($thing)) {
		echo "{$thing}\n";
	}
}
