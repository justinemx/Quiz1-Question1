<?php

  trait MessageOne {
    public function msgOne() {
      echo "From Trait One";
    }
  }

  trait MessageTwo {
    public function msgTwo() {
      echo "From Trait Two";
    }
  }

  class MainClass {
    use MessageOne, MessageTwo;
  }

  $mainClass = new mainClass();
  $mainClass -> msgOne();
  echo "\n";
  $mainClass -> msgTwo();
