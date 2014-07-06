<?php

$is_raining = TRUE;

if (is_bool($is_raining)) {
  echo "{$is_raining} is expected type of boolean\n";
}
//Will return as true. It's asking if the variable is a boolean and is it true.

$is_raining = TRUE;

if (!is_bool($is_raining)) {
  echo "{$is_raining} is expected type of boolean\n";
}
