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
$physicists_string = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';


$physics_array = explode(', ', $physicists_string);

// var_dump($physics_array);
// $famous_fake_physicists = implode(',', $physics_array);

$last_item = array_pop($physics_array);

$physics_string = implode(',', $physics_array);
// echo $famous_fake_physicists;

echo "Some of the most famous fictional theoretical physicists are {$physics_string}" . ' and ' . $last_item . '.' . PHP_EOL;




















