<?php

// Set the default timezone
// date_default_timezone_set('America/Chicago');

// // Get Day of Week as number
// // 1 (for Monday) through 7 (for Sunday)
// $day_of_week = date('N');

// switch($day_of_week) {
//     case 1:
//         // Output Monday
//     case 2:
//         // Output Tuesday
//     // etc through day 7
// }
// date_default_timezone_set('America/Chicago');

// $day_of_week = date(6);

// switch($day_of_week) {
// 	case '1':
// 		echo "Monday\n";
// 		break;
// 	case '2':
// 		echo "Tuesday\n";
// 		break;
// 	case '3':
// 		echo "Wednesday\n";
// 		break;	
// 	case '4':
// 		echo "Thursday\n";
// 		break;
// 	case '5';
// 		echo "Friday\n";
// 		break;		
// 	case '6':
// 		echo "Saturday\n";
// 		break;
// 	case '7':
// 		echo "Sunday\n";
// 		break;
// 	default:
// 		echo "America/Chicago";			
// }    

//Test and verify the results before proceeding by creating a matching 'if' block. The output should be identical.

$date = 5;

if ($date == 1) {
	echo "Sunday\n";
} elseif ($date == 2) {
	echo "Monday\n";
} elseif ($date == 3) {
	echo "Tuesday\n";
} elseif ($date == 4) {
	echo "Wednesday\n";
} elseif ($date == 5) {
	echo "Thursday\n";
} elseif ($date == 6) {
	echo "Friday\n";
} elseif ($date == 7) {
	echo "Saturday";
} 







