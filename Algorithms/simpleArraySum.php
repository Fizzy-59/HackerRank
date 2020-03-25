<?php

/*
* https://www.hackerrank.com/challenges/compare-the-triplets/problem
* Complete the simpleArraySum function below.
 */
function simpleArraySum($ar)
{
    $alice = 0;
    $bob = 0;


    for ($i = 0; $i < 4; $i++)
    {
        if ($a[$i] > $b[$i])
        {
            $alice++;
        }
        elseif ($a[$i] === $b[$i])
        {

        }
        else
        {
            $bob++;
        }
    }

    return [$alice, $bob];

}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$a_temp = rtrim(fgets(STDIN));

$a = array_map('intval', preg_split('/ /', $a_temp, -1, PREG_SPLIT_NO_EMPTY));

$b_temp = rtrim(fgets(STDIN));

$b = array_map('intval', preg_split('/ /', $b_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = compareTriplets($a, $b);

fwrite($fptr, implode(" ", $result) . "\n");

fclose($fptr);
