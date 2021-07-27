<?php

require_once "Person.php";

class Student extends Person 
{
  public int $studentId;

  public function __construct($name, $surname, $studentId)
  {
    parent::__construct($name, $surname, $studentId);
    $this->age = 40;
    $this->studentId = $studentId;
  }
}
?>
