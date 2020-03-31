<?php

$n = readline();

for($i = 1; $i < 11; $i++ )
{
    echo "$n x $i = " . $n*$i . "\n";
}



$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);