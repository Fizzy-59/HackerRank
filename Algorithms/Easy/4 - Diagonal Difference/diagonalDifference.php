<?php
// https://www.hackerrank.com/challenges/diagonal-difference/problem?h_r=next-challenge&h_v=zen&h_r=next-challenge&h_v=zen

/*
 * Complete the 'diagonalDifference' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts 2D_INTEGER_ARRAY arr as parameter.
 */

function diagonalDifference($arr)
{
    $count = count($arr);

    $diag1 = 0;
    $diag2 = 0;

    for($i=0; $i<$count; $i++)
    {
        $diag1 += $arr[$i][$i];
        $diag2 += $arr[$i][$count - 1 - $i];
    }
    return abs($diag1 - $diag2);
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$n = intval(trim(fgets(STDIN)));

$arr = array();

for ($i = 0; $i < $n; $i++) {
    $arr_temp = rtrim(fgets(STDIN));

    $arr[] = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));
}

$result = diagonalDifference($arr);

fwrite($fptr, $result . "\n");

fclose($fptr);
