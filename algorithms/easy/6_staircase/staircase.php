<?php

// Complete the staircase function below.

/*
 * (n - 1) espace et n-(n +1) dièze
 * */

function staircase($n)
{
    for($i = 0; $i < $n; $i++)
    {
        for($j = 0; $j < $n; $j++ )
        {
            echo $i < ($n - $j - 1) ? " " : "#";
        }
        echo "\n";
    }
}

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

staircase($n);

fclose($stdin);