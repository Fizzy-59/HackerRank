<?php


class person
{
    protected $firstName, $lastName, $id;

    public function __construct($first_name, $last_name, $identification)
    {
        $this->firstName = $first_name;
        $this->lastName = $last_name;
        $this->id = $identification;
    }

    function printPerson()
    {
        print("Name: {$this->lastName}, {$this->firstName}\n");
        print("ID: {$this->id}\n");
    }
}

class Student extends person
{
    private $testScores;

    /*
    *   Class Constructor
    *
    *   Parameters:
    *   firstName - A string denoting the Person's first name.
    *   lastName - A string denoting the Person's last name.
    *   id - An integer denoting the Person's ID number.
    *   scores - An array of integers denoting the Person's test scores.
    */
    // Write your constructor here
    public function __construct($first_name, $last_name, $identification, $scores)
    {
        parent::__construct($first_name, $last_name, $identification);

        switch ($scores)
        {
            case ($scores >= 90) && ($scores <= 100) :
                $grade = 'O';
                break;
            case ($scores >= 80) && ($scores <= 90) :
                $grade = 'E';
                break;
            case ($scores >= 70) && ($scores <= 80) :
                $grade = 'A';
                break;
            case ($scores >= 55) && ($scores <= 70) :
                $grade = 'P';
                break;
            case ($scores >= 40) && ($scores <= 55) :
                $grade = 'D';
                break;
            case ($scores <= 40) :
                $grade = 'T';
                break;
        }
    }

    /*
    *   Function Name: calculate
    *   Return: A character denoting the grade.
    */
    // Write your function here
    public function calculate()
    {

    }
}


$file = fopen("php://stdin", "r");

$name_id = explode(' ', fgets($file));

$first_name = $name_id[0];
$last_name = $name_id[1];
$id = (int)$name_id[2];

fgets($file);

$scores = array_map(intval, explode(' ', fgets($file)));

$student = new Student($first_name, $last_name, $id, $scores);

$student->printPerson();

print("Grade: {$student->calculate(,  ,)}");