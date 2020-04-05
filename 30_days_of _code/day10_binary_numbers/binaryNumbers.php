<?php

$nb = (string) readline();
$binary = decbin($nb);

$ar = explode('0', $binary);

$max = max($ar);
$count = strlen($max);

echo $count;



$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

fclose($stdin);