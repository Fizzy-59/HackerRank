<?php

$stdin = fopen("php://stdin", "r");

$arr == array();

for ($i = 0; $i < 6; $i++)
{
    fscanf($stdin, "%[^\n]", $arr_temp);
    $arr[] = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));
}

$sum = null;

for($line = 0; $line < 4; $line++)
{
    for($col = 0; $col < 4; $col++)
    {
        $tmpSum =
            $arr[$line][$col]+
            $arr[$line][$col+1]+
            $arr[$line][$col+2]+
            $arr[$line+1][$col+1]+
            $arr[$line+2][$col]+
            $arr[$line+2][$col+1]+
            $arr[$line+2][$col+2]
        ;

        if(!isset($sum) || $tmpSum > $sum)
        {
            $sum = $tmpSum;
        }
    }
}
echo $sum;

fclose($stdin);