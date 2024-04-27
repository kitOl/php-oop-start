<?php

namespace Person;

class Person
{
  private $first;
  private $last;
  private $age;

  public static $drinkingAge = 21;

  public function __construct(string $first, string $last, int $age)
  {
    $this->first = $first;
    $this->last = $last;
    $this->age = $age;
  }

  public function getFirst()
  {
    return $this->first;
  }

  public function setFirst(string $first)
  {
    $this->first = $first;
  }

  public function getLast()
  {
    return $this->last;
  }

  public function getAge()
  {
    return $this->age;
  }

  public function setAge(int $newAge)
  {
    $this->age = $newAge;
  }

  public function destruct()
  {
    echo "Class is destruct. Buy!";
  }
}
