<?php

#Array - variable that holds multiple values
/*
  - indexed
  - associative
  - multi-dimensional
*/

// indexed
$people = array('Kevin', 'Jeremy', 'Sara');
// echo $people[0];

$ids = array(25, 55, 12);
echo $ids[2];

$cars = ['Honda', 'Toyota', 'Ford'];
$cars[3] = 'Chevy';
$cars[] = 'BMW';
echo '<br>';
echo $cars[4];

echo count($cars);
print_r($cars);

var_dump($cars);

// Associative arrays

$people = array('Brad' => 35, 'Jose' => 32, 'William' =>37);

echo $people['Brad'];

$ids = [22 => 'Brad', 44 => 'Jose', 63 => 'William'];

echo $ids[22];

$people['Jill'] = 42;
print_r($people);

// Multi-dimensional

$cars = array(
  array('Honada', 20, 10),
  array('Toyota', 30, 10),
  array('Ford', 23, 12)
);

echo $cars[1][0];
