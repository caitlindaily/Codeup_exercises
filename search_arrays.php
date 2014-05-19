<?php


// first names
$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];




function find($needle, $haystack) {
	
	$result = array_search($needle, $haystack);

	if ($result !== FALSE) {
		$result = True;
	}elseif ($result == false) {
		$result = False;

	}return $result;
}
var_dump(find('Tina', $names));
var_dump(find('Bob', $names));

