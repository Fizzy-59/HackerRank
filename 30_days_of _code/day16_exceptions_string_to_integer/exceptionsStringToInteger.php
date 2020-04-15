<?php

declare(strict_types=1);

$s = readline();

function isString($s)
{
    if (!is_string($s))
    {
        throw new Exception('Bad String');
    }
    else
    {
        throw new Exception($s);
    }
}

try
{
    isString($s);
} catch (Exception $e) {
    echo $e->getMessage(), "\n";
}



$handle = fopen ("php://stdin","r");
fscanf($handle,"%s",$S);

?>
