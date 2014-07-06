<?php
//Ask user for their numbers
fwrite (STDOUT, 'Choose a beginning number. ');
//Display all numbers in perameters user chose
$start = trim(fgets(STDIN));

if (!is_numeric($start)) {
  echo "Please use numeric value. ";
  exit;
};

fwrite (STDOUT, 'Choose an ending number. ');

$end = trim(fgets(STDIN));

if (!is_numeric($end)) {
  echo "Please use numeric value. ";
  exit;
};	

fwrite (STDOUT, 'How would you like to increment? By... ');

$increment = trim(fgets(STDIN));

if ($increment == "\n") {
  $increment ++ ;
};


for($i = $start ; $i <= $end; $i += $increment) {
  echo "{$i}\n";
};	


