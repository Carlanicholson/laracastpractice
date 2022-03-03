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


//class Team {
//    protected $name;
//
//    protected $members = [];
//
//    public function __construct($name, $members = [])
//
//{
//    $this->name = $name;
//    $this->members = $members;
//}
//
//public function name()
//{
// return $this->name;
//}
//
//public function members()
//{
//    return $this->members;
//}
//
//public function add($name)
//{
//    $this->members[] = $name;
//}
//}
//
//
//$acne = new Team('Acne' , [
//
//    'John Doe',
//    'Jane Doe'
//]
//);
//
//$acne->add('Jen Doe');
//
//var_dump($acne->members());


class CoffeeMaker
{
    public function brew()
    {
        var_dump('Brewing the coffee');
    }

}
//"is a"
class SpecialityCoffeeMaker extends CoffeeMaker
{
    public function brewLatte()
    {
        var_dump('Brewing a latte');
    }
}

class ExtraCoffeeMaker extends SpecialityCoffeeMaker

{
    public function brewFlatWhite()
    {
        var_dump('Brewing a Flat White');
    }
}

(new ExtraCoffeeMaker())->brewFlatWhite();
