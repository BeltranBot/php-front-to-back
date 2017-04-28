<?php

# conditionals
/*
 ==
 ===
 <
 >
 <=
 >=
 !=
 !==
*/

$num = '5';
// doesn't pass because data types isn't the same
if($num === 5) {
  echo '5 passed';
} elseif($num === '6') {
  echo "'5' passed";
} else {
  echo 'did not pass';
}

# nesting if

$num = 6;

if($num > 4) {
  if($num < 10) {
    echo "$num passed";
   }
}

/*
  logical operators
  and &&
  or ||
  xor - one has to be true to pass
*/

if($num > 4 || $num < 10) {
  echo "$num passed";
}

# Switch
$favColor = 'blue';

switch($favColor) {
  case 'red':
    echo 'Your favorite color is red';
    break;
  case 'blue':
    echo 'Your favorite color is blue';
    break;
  case 'green':
    echo 'Your favorite color is green';
    break;
  default:
    echo 'your favorite color is something else';
}
