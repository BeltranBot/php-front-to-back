<?php
// single line comment
/*
  multiline
  comment
*/

#VARIABLES
/*
  - Prefix $
  - Start with a letter or an underscore
  - Only letters, numbers and underscores
  - Case sensitive
*/
#Data Types
/*
  String
  Integers
  floats
  booleans
  Arrays
  Objects
  NULL
  Resource
*/

$num1 = 4;
$num2 = 10;
$sum = $num1 + $num2;
$string1 = 'Hello';
$string2 = 'World!!';
$greeting = $string1 . " " . $string2;
$greeting2 = "$string1 $string2";
$string3 = 'They\'re Here';
$float1 = 4.4;
$boolean1 = true;

$output = "Hello World!";
echo $greeting;
echo $greeting;
echo "<br>";
echo $string3;

#Constants
define("GREETING", 'Hello Everyone');
echo "<br>";
echo GREETING;
