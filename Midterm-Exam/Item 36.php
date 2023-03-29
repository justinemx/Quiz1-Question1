<?php
  abstract class Arithmetic {
    abstract function addition();
    abstract function subtraction();
    abstract function multiplication();
    abstract function division();
  }

  class Calculator extends Arithmetic {
    public $a;
    public $b;

    public function __construct($a, $b) {
      $this->a = $a;
      $this->b = $b;
    }

    function addition() {
      return $this->a + $this->b;
    }

    function subtraction() {
      return $this->a - $this->b;
    }

    function multiplication() {
      return $this->a * $this->b;
    }

    function division() {
      return $this->a / $this->b;
    }
  }

?>

