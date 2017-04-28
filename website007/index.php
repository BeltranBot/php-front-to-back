<?php
$path = 'dir0/dir1/myfile.php';
$file = 'file1.txt';
// return filename
echo basename($path);
echo "<br>";
// return filnema without extension
echo basename($path, '.php');
echo "<br>";
// return the dir name from path
echo dirname($path);
echo "<br>";

// check if file exists
echo file_exists($file);
echo "<br>";

// get absolute path

echo realpath($file);
echo "<br>";

// checks to see if file
echo is_file($file);
echo "<br>";

// check if file is writable
echo is_writeable($file);
echo "<br>";

// check if file is readable
echo is_readable($file);
echo "<br>";

// get file size
echo filesize($file);
echo "<br>";

// create a directory
// mkdir('testing');
// remove dir if empty
// rmdir('testing');

// copy file
echo copy('file1.txt', 'file2.txt');
echo "<br>";

// rename a file
rename('file2.txt', 'myfile.txt');

// delete file
// unlink('myfile.txt');

echo "<br>";

// write from file to string
echo file_get_contents($file);
echo "<br>";

// write string to file

echo file_put_contents($file, 'Goodbye World');
echo "<br>";
$current = file_get_contents($file);
$current .= ' Goodbye world';

file_put_contents($file, $current);

echo "<br>";

// open file for reading
/*
$handle = fopen($file, 'r');
$data = fread($handle, filesize($file));
echo $data;
*/

// open file for writing
$handle = fopen('file2.txt', 'w');
$txt = "John Doe\n";
fwrite($handle, $txt);
$txt = 'Steve smith';
fwrite($handle, $txt);
fclose($handle);







 ?>
