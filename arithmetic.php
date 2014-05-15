<?php


function add($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
    	echo $a + $b . PHP_EOL;
    }else {
    	echo "ERROR: {$a} and {$b} are not numeric values.\n";
	}
}

function subtract($a, $b) {
   if (is_numeric($a) && is_numeric($b)) {
    	echo $a - $b . PHP_EOL;
    }else {
    	echo "ERROR: {$a} and {$b} are not numeric values.\n";
	}
}

function multiply($a, $b) {
   if (is_numeric($a) && is_numeric($b)) {
    	echo $a * $b . PHP_EOL;
    }else {
    	echo "ERROR: {$a} and {$b} are not numeric values.\n";
	}
}
function divide($a, $b) {
   if (is_numeric($a) && is_numeric($b)) {
   		if ($b == 0){
   			echo "Cannot divide by zero.\n";
   		}else {
    		echo $a / $b . PHP_EOL;
    	}
    }else {
    	echo "ERROR: {$a} and {$b} are not numeric values.\n";
	}
}
function modulus($a, $b) {
   if (is_numeric($a) && is_numeric($b)) {
    	echo $a % $b . PHP_EOL;
    }else {
    	echo "ERROR: {$a} and {$b} are not numeric values.\n";
	}
}
add('dog',5);
subtract(3,5);
multiply(2,5);
divide(3,0);
modulus(3,5);


















































