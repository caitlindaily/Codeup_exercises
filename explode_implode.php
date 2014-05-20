<?php

// $physicists_string = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

// echo $physicists_string . PHP_EOL;

// $now_array = explode(', ', $physicists_string);

// print_r($now_array) . PHP_EOL;
//============================================================
// $physicists_array = ['Gordon Freeman', 'Samantha Carter', 'Sheldon Cooper', 'Quinn Mallory', 'Bruce Banner', 'Tony Stark'];

// print_r($physicists_array);

// $new_string = implode('|', $physicists_array);

// echo $new_string . PHP_EOL;
//=============================================================
function humanized_list($string, $sort = false)
{
	$array = explode(', ', $string);
	
	if ($sort == 'sort') 
	{
		sort($array);
	}	
	$last_item = array_pop($array);

	$final_string = implode(',', $array);

	return $final_string . ' and ' . $last_item;
}

$physicists_string = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

$famous_fake_physicists = humanized_list($physicists_string, sort);

	echo "Some of the most famous fictional theoretical physicists are $famous_fake_physicists.\n";




















