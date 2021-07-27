<?php

// What is class and instance
class Person {
  public $name;
  public $surname;
  private $age;
  public static $counter = 0;


  public function __construct($name, $surname)
  {
    $this->name = $name;
    $this->surname = $surname;
    self::$counter++;
  }

public function setAge($age) 
{
  $this->age = $age;
}

public function getAge()
{
  echo "inside getAge() method" . '<br>';
  return $this->age;
}

public static function getCounter()
{
  echo "inside getCounter function. Amount in instances created: ";
  return self::$counter;
}

}



$personOne = new Person("Jimbo", "McLean");
$personTwo = new Person("Cindi", "Lue");


$personOne->setAge = 40;
$personTwo->setAge = 39;


echo $personOne->getAge();
echo $personTwo->getAge();

echo Person::getCounter();

// $personOne->name = 'Jimbo'; 
// $personOne->surname = 'McLean'; 


// $personTwo->name = 'Cindi'; 
// $personTwo->surname = 'Lue'; 

echo '<pre>';
var_dump($personOne);
echo '</pre>';



echo '<pre>';
var_dump($personTwo);
echo '</pre>';

//echo $personOne->name . '<br>';
// echo $personTwo->name . '<br>';


// Create Person class in Person.php

// Create instance of Person

// Using setter and getter
