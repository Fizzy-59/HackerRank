<?php
$_fp = fopen("php://stdin", "r");

/* Enter your code here. Read input from STDIN. Print output to STDOUT */
$nb = readline();
$cpt = 0;

while(!feof($_fp)) {
    while($word = fgets($_fp)) {
        if($cpt > 0)
        {
            $arr = explode(' ', $word);


            if(!empty($arr[1]))
            {
                echo $arr[0] . '=' . $arr[1];
            }
            else
            {
                echo 'Not found';
            }
        }
        $cpt++;
    }
}
