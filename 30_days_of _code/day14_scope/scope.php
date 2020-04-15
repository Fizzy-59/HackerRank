<?php
class Difference
{
    private $elements=array();
    public $maximumDifference;

    // Write your code here
    public function __construct($arr)
    {
        $this->elements = $arr;
    }

    public function computeDifference()
    {
        $max = max($this->elements);
        $min = min($this->elements);

        $result = $max - $min;

        $this->maximumDifference = $result;
    }

} //End of Difference class


$N=intval(fgets(STDIN));
$a =array_map('intval', explode(' ', fgets(STDIN)));
$d=new Difference($a);
$d->ComputeDifference();
print ($d->maximumDifference);
?>
