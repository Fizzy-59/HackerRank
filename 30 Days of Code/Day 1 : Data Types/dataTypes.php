<?php

$handle = fopen ("php://stdin","r");
$i = 4;
$d = 4.0;
$s = "HackerRank ";

// Declare second integer, double, and String variables.
// Read and save an integer, double, and String to your variables.

$integer = fgets($handle);

$double = fgets($handle);

$string = fgets($handle);

// Print the sum of both integer variables on a new line.

// Print the sum of the double variables on a new line.
echo ($i + $integer) . "\n";

// Concatenate and print the String variables on a new line
echo number_format($d + $double, 1) . "\n";

// The 's' variable above should be printed first.
echo $s . $string;

fclose($handle);
