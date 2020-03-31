<?php
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */

$cpt = 0;

while(!feof($_fp)) {
    while($word = fgets($_fp)) {
        if($cpt > 0)
        {
            $letters = str_split(trim($word));
            $even = '';
            $odd = '';

            foreach($letters as $k => $letter)
            {
                if ($k %2 == 0)
                {
                    $even .= $letter;
                }
                else
                {
                    $odd .= $letter;
                }
            }

            echo $even . ' ' . $odd . "\n";
        }
        $cpt++;
    }
}

