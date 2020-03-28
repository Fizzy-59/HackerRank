<?php

// Complete the plusMinus function below.
function plusMinus($arr)
{
    $count = count($arr);

    $positive = 0;
    $negative = 0;
    $zero = 0;

    for($i = 0; $i < $count; $i++)
    {
        if($arr[$i] > 0)
        {
            $positive += 1;
        }
        elseif ($arr[$i] < 0)
        {
            $negative += 1;
        }
        else
        {
            $zero += 1;
        }
    }

    echo round($positive/$count, $count) . "\n";
    echo round($negative/$count, $count) . "\n";
    echo round($zero/$count,     $count) . "\n";



}

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%[^\n]", $arr_temp);

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

plusMinus($arr);

fclose($stdin);