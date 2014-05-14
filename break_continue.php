<?php

// Create a for loop that shows all even numbers between 1 and 100 using continue.

for ($i=0; $i <= 100 ; $i +=2) { 
	if ($i % 2 == 0) {
		echo "$i\n";
		continue;
	}
}	echo "The end\n";



// Create another for loop that counts from 1 to 100, but stops after 10 using break.

for ($i=1; $i <= 100 ; $i++) { 
	echo "$i\n";
	if ($i == 10) {
		break;
	}
}
echo "The end\n";




       



