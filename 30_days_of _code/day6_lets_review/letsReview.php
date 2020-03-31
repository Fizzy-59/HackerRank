<?php
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */

$cpt = 0;

while(!feof($_fp)) {
    while($word = fgets($_fp)) {
        if($cpt > 0)
        {
            str_split($word);
            $nb = count($word);
            $even = '';
            $odd = '';

            for($i=0; $i < $nb ; $i++)
            {
                if ($word[$i] %2 == 0)
                {
                    $even .= $word[$i];
                }
                else
                {
                    $odd .= $word[$i];
                }
            }

            echo $even . ' ' . $odd . "\n";
        }
        $cpt++;
    }
}

