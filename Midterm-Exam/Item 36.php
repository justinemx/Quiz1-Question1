<?php
  class Arithmetic {
    public function add($x, $y) {
      return $x + $y;
    }
    public function subtract($x, $y) {
      return $x - $y;
    }
    public function multiply($x, $y) {
      return $x * $y;
    }
    public function divide($x, $y) {
      if ($y == 0) {
        return "Cannot divide by zero";
      } else {
        return $x / $y;
      }
    }
  }

  class Calculator extends Arithmetic {
    public function calculate($x, $y, $operator) {
      switch ($operator) {
        case '+':
          return $this->add($x, $y);
          break;
        case '-':
          return $this->subtract($x, $y);
          break;
        case '*':
          return $this->multiply($x, $y);
          break;
        case '/':
          return $this->divide($x, $y);
          break;
        default:
          return "Invalid operator";
      }
    }
  }


?>

