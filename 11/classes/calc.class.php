<?php

class Calc
{
  public $operator;
  public $num1;
  public $num2;

  public function __construct(string $operator, int $num1, int $num2)
  {
    $this->operator = $operator;
    $this->num1 = $num1;
    $this->num2 = $num2;
  }

  public function calculate()
  {
    switch ($this->operator) {
      case 'add':
        $result = $this->num1 + $this->num2;
        break;

      case 'sub':
        $result = $this->num1 - $this->num2;
        break;

      case 'div':
        $result = $this->num1 / $this->num2;
        break;

      case 'mul':
        $result = $this->num1 * $this->num2;
        break;

      default:
        echo "No operator matches";
        break;
    }
    return $result;
  }
}
