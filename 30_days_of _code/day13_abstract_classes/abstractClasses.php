<?php
abstract class Book
{

    protected $title;
    protected  $author;

    function __construct($t,$a){
        $this->title=$t;
        $this->author=$a;
    }
    abstract protected function display();
}

//Write MyBook class

class MyBook extends Book
{
    private $price;

    function __construct(string $title, string $author, int $price)
    {
        $title  = ': ' . $this->title;
        $author = ': ' . $this->author;
        $price  = ': ' . $price;
    }

    function display()
    {
        // TODO: Implement display() method.
        echo $this->title;
        echo $this->author;
        echo $this->price;
    }
}

$title=fgets(STDIN);
$author=fgets(STDIN);
$price=intval(fgets(STDIN));
$novel=new MyBook($title,$author,$price);
$novel->display();

?>
