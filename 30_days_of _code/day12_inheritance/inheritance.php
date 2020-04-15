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
        $this->testScores = $scores;
    }

    /*
    *   Function Name: calculate
    *   Return: A character denoting the grade.
    */
    // Write your function here
    public function calculate()
    {
        $count = count( (array) $this->testScores);
        $total = 0;

        for($i = 0; $i < $count; $i++)
        {
            $total += $this->testScores[$i];
        }

        $average = ($total / $count);
        $grade = '';

        switch ($average)
        {
            case ($average >= 90) && ($average <= 100) :
                $grade = 'O';
                break;
            case ($average >= 80) && ($average <= 90) :
                $grade = 'E';
                break;
            case ($average >= 70) && ($average <= 80) :
                $grade = 'A';
                break;
            case ($average >= 55) && ($average <= 70) :
                $grade = 'P';
                break;
            case ($average >= 40) && ($average <= 55) :
                $grade = 'D';
                break;
            case ($average <= 40) :
                $grade = 'T';
                break;
        }

        return $grade;
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

print("Grade: {$student->calculate()}");