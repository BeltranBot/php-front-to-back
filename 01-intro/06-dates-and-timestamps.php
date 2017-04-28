<?php

echo date('d'); // day
echo "<br>";
echo date('m'); // month
echo "<br>";
echo date('Y'); // year
echo "<br>";
echo date('l'); // day of the week
echo "<br>";
echo date('Y/m/d');
echo "<br>";
echo date('h'); // hour
echo "<br>";
echo date('i'); // min
echo "<br>";
echo date('s'); // seconds
echo "<br>";
echo date('a'); // am or pm
echo "<br>";
// set time zone
date_default_timezone_set('America/Bogota');
echo date('h:i:sa');

// timestamp
/*
Unix timestamp is a long integer containing the number of
seconds between the unix epoch (January 1 1970 00:00:00 GMT)
and the time specified
*/
$timestamp = mktime(10,14,54,9,10,1981);
echo "<br>";
echo $timestamp;
echo "<br>";
echo date('m/d/y h:i:sa', $timestamp);
echo "<br>";
$timestamp2 = strtotime('7:00pm March 22 2016');
$timestamp3 = strtotime('tomorrow');
$timestamp4 = strtotime('next Sunday');
$timestamp5 = strtotime('+2 Months');

echo $timestamp2;
echo "<br>";
echo date('m/d/y h:i:sa', $timestamp2);
echo "<br>";
echo date('m/d/y h:i:sa', $timestamp3);
echo "<br>";
echo date('m/d/y h:i:sa', $timestamp4);
echo "<br>";
echo date('m/d/y h:i:sa', $timestamp5);
