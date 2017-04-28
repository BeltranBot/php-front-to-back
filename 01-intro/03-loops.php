<?php

# loops - execute code set number of times

/*
  for
  while
  do..while
  foreach
*/

# for loops
# @params - init, condition, inc

for($i = 0; $i <= 10; $i++) {
  echo 'Number ' . $i;
  echo "<br>";
}

# while loops
# @params - condition

$i = 0;

while($i < 10) {
  echo $i;
  echo '<br>';
  $i++;
}

# do..while
# @params - condition

$i = 0;

do {
  echo $i;
  echo '<br>';
  $i++;
} while($i < 10);

# foreach loop - for arrays

$people = ['Brad', 'Jose', 'William'];

foreach($people as $person) {
  echo $person . "<br>";
}

// with associative array

$people = [
  'brad' => 'brad@gmail.com',
  'jose' => 'jose@gmail.com',
  'william' => 'william@gmail.com'
];

foreach ($people as $person => $email) {
  echo $person . " email is: " .$email;
  echo "<br>";
}
