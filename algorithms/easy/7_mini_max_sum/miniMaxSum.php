<?php

// Complete the miniMaxSum function below.
function miniMaxSum($arr)
{
    sort($arr);
    $nb = count($arr);
    $resultMin = 0;
    $resultMax = 0;

    for($j=0; $j < $nb-1; $j++)
    {
        $resultMin += $arr[$j];
    }

    for ($i=1; $i < $nb; $i++)
    {
        $resultMax += $arr[$i];
    }

    echo $resultMin . " ";
    echo $resultMax;
}

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%[^\n]", $arr_temp);

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

miniMaxSum($arr);

fclose($stdin);