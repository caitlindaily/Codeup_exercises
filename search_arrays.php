<?php


// first names
$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];




function find($needle, $haystack) 
{
	$result = array_search($needle, $haystack);

	if ($result === false) {
		return false;
	}else {
		return true;
	}
}
// var_dump(find('Tina', $names));
// var_dump(find('Bob', $names));



function compare_array_names($array1, $array2) 
{
	$count = 0;
	foreach ($array1 as $key => $value)
	{
		if (find($value, $array2)) {
		 $count++;
		}
	}	  
	return $count;
}
var_dump(compare_array_names($names, $compare));






