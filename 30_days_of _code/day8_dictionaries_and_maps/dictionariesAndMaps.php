<?php $_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */

$arr = [];

while(!feof($_fp))
{
    while($line = fgets($_fp))
    {
        $arr[] = trim($line);
    }
}

$phones = [];
$nb = $arr[0];

for($i=1; $i<=$nb; $i++)
{
    $info = explode(' ', $arr[$i]); $phones[$info[0]] = $info[1];
}

for($j=($nb+1); $j<count($arr); $j++)
{
    if(array_key_exists($arr[$j], $phones))
    {
        echo $arr[$j].'='.$phones[$arr[$j]]."\n";
    }
    else
    {
        echo "Not found\n";
    }
}
