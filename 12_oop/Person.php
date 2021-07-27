<?php

// Create Person class in Person.php
class Person {
  public string $name;
  public string $surname;
  private ?int $age;
  public static int $counter = 0;

  public function __construct($name, $surname)
  {
    $this->name = $name;
    $this->surname = $surname;
    $this->age = null;
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
?>
