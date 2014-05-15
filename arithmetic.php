<?php


function add($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
    	echo $a + $b . PHP_EOL;
    }else {
    	echo "ERROR: Must use numeric values.\n";
	}
}

function subtract($a, $b) {
   if (is_numeric($a) && is_numeric($b)) {
    	echo $a - $b . PHP_EOL;
    }else {
    	echo "ERROR: Must use numeric values.\n";
	}
}

function multiply($a, $b) {
   if (is_numeric($a) && is_numeric($b)) {
    	echo $a * $b . PHP_EOL;
    }else {
    	echo "ERROR: Must use numeric values.\n";
	}
}
function divide($a, $b) {
   if (is_numeric($a) && is_numeric($b)) {
    	echo $a / $b . PHP_EOL;
    }else {
    	echo "ERROR: Must use numeric values.\n";
	}
}
function modulus($a, $b) {
   if (is_numeric($a) && is_numeric($b)) {
    	echo $a % $b . PHP_EOL;
    }else {
    	echo "ERROR: Must use numeric values.\n";
	}
}
add(3,"7");
subtract(3,'hello');
multiply(TRUE,5);
divide(3,false);
modulus(3,5);

























