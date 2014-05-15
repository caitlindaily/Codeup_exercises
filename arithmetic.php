<?php

function error($a, $b, $error_code) {
	if ($error_code === 1 ){
		echo "ERROR: {$a} and {$b} are not numeric values.\n";
	}else {
		echo "Cannot divide by zero.\n";
	}
}

function add($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
    	echo $a + $b . PHP_EOL;
    }else {
    	error($a, $b, 1);
	}
}

function subtract($a, $b) {
   if (is_numeric($a) && is_numeric($b)) {
    	echo $a - $b . PHP_EOL;
    }else {
    	 error($a, $b, 1);
	}
}

function multiply($a, $b) {
   if (is_numeric($a) && is_numeric($b)) {
    	echo $a * $b . PHP_EOL;
    }else {
    	 error($a, $b, 1);
	}
}
function divide($a, $b) {
   if (is_numeric($a) && is_numeric($b)) {
   		if ($b == 0){
   			error($a, $b, 0);
   		}else {
    		echo $a / $b . PHP_EOL;
    	}
	}	
}
function modulus($a, $b) {
   if (is_numeric($a) && is_numeric($b)) {
    	echo $a % $b . PHP_EOL;
    }else {
    	 error($a, $b, 1);
	}
}

add('dog',5);
subtract(3,5);
multiply(2,5);
divide(3,0);
modulus(3,5);

