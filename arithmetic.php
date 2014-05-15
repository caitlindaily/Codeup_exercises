<?php

function error($a, $b, $error_code) {
	if ($error_code == 1){
		return "ERROR: {$a} and {$b} are not numeric values.\n";
	}else {
		return "Cannot divide by zero.\n";
	}
}

function add($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
    	return;
    }else {
    	return error($a, $b, 1);
	}
}

function subtract($a, $b) {
   if (is_numeric($a) && is_numeric($b)) {
    	return $a - $b . PHP_EOL;
    }else {
    	 return error($a, $b, 1);
	}
}

function multiply($a, $b) {
   if (is_numeric($a) && is_numeric($b)) {
    	return $a * $b . PHP_EOL;
    }else {
    	 return error($a, $b, 1);
	}
}
function divide($a, $b) {
   if (is_numeric($a) && is_numeric($b)) {
   		if ($b == 0){
   			return error($a, $b, 0);
   		}else {
    		return $a / $b . PHP_EOL;
    	}
	}else {
		return error($a, $b, 1);
	}	
}
function modulus($a, $b) {
   if (is_numeric($a) && is_numeric($b)) {
    	return $a % $b . PHP_EOL;
    }else {
    	 return error($a, $b, 1);
	}
}

echo add('dog',5);
echo subtract(3,5);
echo multiply(2,5);
echo divide(3,0);
echo modulus(3,5);


