<?php
// https://www.hackerrank.com/challenges/30-conditional-statements/problem

$n = readline();

if($n%2)
{
    echo 'Weird';
}
elseif ($n >= 2 && $n <= 5)
{
    echo 'Not Weird';
}
elseif ($n >= 6 && $n <= 20)
{
    echo 'Weird';
}
else
{
    echo 'Not Weird';
}


$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $N);

fclose($stdin);
