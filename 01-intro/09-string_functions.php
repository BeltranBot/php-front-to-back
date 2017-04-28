<?php
# substr()
# returns a portion of a string

$output = substr('Hello',1);
echo $output;

echo "<br>";

# strlen()
# returns the length of a string
$output = strlen('Hello world');
echo $output;

echo "<br>";

# strpos()
# finds the position of the first occurence of a sub string

$output = strpos('Hello world', 'o');
echo $output;

echo "<br>";

# strrpos()
# finds the position of the last occurence of a sub string
$output = strrpos('hello world', 'o');
echo $output;

echo "<br>";

# trim()
# strips whitespace
$text = 'Hello world          ';
var_dump($text);

$trimmed = trim($text);
var_dump($trimmed);

echo "<br>";

# strtoupper
# makes everything uppercase
$output = strtoupper('Hello world');
echo $output;

echo "<br>";

# strtolower
# makes everything lowercase

$output = strtolower('Hello World');
echo $output;

echo "<br>";

# ucwords()
# capitalize every word
$output = ucwords('hello world');
echo $output;

# str_replace()
# replace all occurences of a search string with a replacements
echo "<br>";

$text = 'Hello World';
$output = str_replace('World', 'Everyone', $text);
echo $output;

echo "<br>";

# is_string()
# check if string

$val = "hello";
$output = is_string($val);

echo $output;

echo "<br>";

$values = [
  true, false, null, "abc", 33, '33',
  22.4, '22.4', '', ' ', 0, '0'
];

foreach($values as $value){
  if (is_string($value)) {
    echo $value . " is a string<br>";
  }
}

echo "<br>";

# gzcompress()
# compress a string

$string = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?";

$compressed = gzcompress($string);
echo $compressed;

echo "<br>";

$original = gzuncompress($compressed);
echo $original;
