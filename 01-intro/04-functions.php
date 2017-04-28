<?php
# Function - is a block of code taht can be repeatedly called

/*
  Camel Case - myFunction()
  Lower Case - my_function()
  Pascal Case - MyFunction()
*/

// create simple function
function simpleFunction() {
  echo "Hello world!<br>";
}

// run simple function
simpleFunction();
function sayHello($name = 'World') {
  echo 'Hello '.$name."<br>";
}

sayHello('Joe');
sayHello('Carlos');
sayHello();

// Return value
function addNumbers($num1, $num2) {
  return $num1 + $num2;
}

echo addNumbers(2, 3);
echo "<br>";

// By Reference
$myNum = 10;

function addFive($num) {
  $num += 5;
}

function addTen(&$num) {
  $num +=10;
}

addFive($myNum);
echo $myNum . "<br>";

addTen($myNum);
echo $myNum . "<br>";
