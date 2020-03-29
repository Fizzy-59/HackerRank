<?php

// Complete the staircase function below.

/*
 * (n - 1) espace et n-(n +1) dièze
 * */

function staircase($n)
{
    for($i = 0; $i < ($n-1); $i++)
    {

    }

}

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

staircase($n);

fclose($stdin);