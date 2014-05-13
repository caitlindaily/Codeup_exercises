<?php
//Ask user for their numbers
fwrite (STDOUT, 'Choose a beginning number. ');
//Display all numbers in perameters user chose
$start = (int)fgets(STDIN);

fwrite (STDOUT, 'Choose an ending number. ');

$end = (int)fgets(STDIN);

fwrite (STDOUT, 'How would you like to increment? By... ');

$increment = (int)fgets(STDIN);

if ($increment == "\n") {
	$increment ++ ;
};


for($start ; $start <= $end; $start += $increment) {
	echo "{$start}\n";
};	

