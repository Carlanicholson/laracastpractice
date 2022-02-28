<?php
require 'index.view.php';


//$task = [
//
//    'title'      => 'washing up',
//    'due'        => 'tomorrow',
//    'assigned_to'=> 'husband',
//    'completed'  => true
//
//];

//$animals = ['dog', 'cat'];



//dd ('hello world');


class Team {
    protected $name;

    protected $members = [];

    public function _construct($name)

{
    $this->name = $name;
}

public function name()
{
 return $this->name;
}

public function members()
{
    return $this->members;
}

public function add($name)
{
    $this->members[] = $name;
}
}


$acne = new Team('Acne');

$acne->add('John Doe');
$acne->add('Jane Doe');

var_dump($acne->members());