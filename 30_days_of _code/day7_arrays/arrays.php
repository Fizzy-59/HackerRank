<?php

$length = readline();
$nb = readline();
$nb = explode(' ', $nb);
$arr = [];

for($i=0; $i < $length; $i++)
{
    array_push($arr, $nb[$i]);
}

$reversed = array_reverse($arr);

for($i=0; $i < $length; $i++)
{
    echo $reversed[$i] . ' ';
}


$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%[^\n]", $arr_temp);

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

fclose($stdin);