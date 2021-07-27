<?php

require_once "Person.php";
require_once "Student.php";

// Create instance of Person
$personOne = new Person("Jimbo", "McLean");
$personTwo = new Person("Cindi", "Lue");

echo Person::getCounter();

$student = new Student("Ima", "McStudent", 12345);

  echo '<pre>';
  var_dump($student);
  echo '</pre>';



$personOne->name = 'Jimbo'; 
$personOne->surname = 'McLean'; 

  echo '<pre>';
  var_dump($personOne);
  echo '</pre>';

$personTwo->name = 'Cindi'; 
$personTwo->surname = 'Lue'; 

  echo '<pre>';
  var_dump($personTwo);
  echo '</pre>';

  echo $personOne->name . '<br>';
  echo $personTwo->name . '<br>';



// Using setter and getter
$personOne->setAge = 40;
$personTwo->setAge = 39;

  echo $personOne->getAge();
  echo $personTwo->getAge();
