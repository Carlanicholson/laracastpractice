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

//inheritance

//class CoffeeMaker
//{
//    public function brew()
//    {
//        var_dump('Brewing the coffee');
//    }
//
//}
////"is a"
//class SpecialityCoffeeMaker extends CoffeeMaker
//{
//    public function brewLatte()
//    {
//        var_dump('Brewing a latte');
//    }
//}
//
//class ExtraCoffeeMaker extends SpecialityCoffeeMaker
//
//{
//    public function brewFlatWhite()
//    {
//        var_dump('Brewing a Flat White');
//    }
//}
//
//(new ExtraCoffeeMaker())->brewFlatWhite();
//
//abstract class AchievementType
//{
//    public function name()
//    {
//        $class  = (new ReflectionClass($this))->getShortName();
//        // FirstThousandPoint => First Thousand Points
//        return trim(preg_replace('/[A-Z]/', ' $0', $class));
//    }
//
//    public function icon()
//    {
//        return strtolower(str_replace(' ', '-', $this->name())).' .png';
//    }
//
//    abstract public function qualifier($user);
//
//}
//
//class FirstThousandPoints extends  AchievementType
//{
//    public function qualifier($user)
//{
//    //
//}
//}
//
//class FirstBestAnswer extends AchievementType
//{
//    public function qualifier($user)
//    {
//    }
//
//}
//
//$achievement  = new FirstBestAnswer();
//




class Age
{
    private $age;

    public function __construct($age)
    {
        if ($age < 0 || $age > 120){
            throw new InvalidArgumentException('That makes no sense');
        }
        $this->age = $age;
    }
    public function increment()

    {
        $this->age+=1;
    }

    public function get()
    {
        return $this->age;
    }

}

$age = new Age(35);
$age->increment();

echo ($age->get());