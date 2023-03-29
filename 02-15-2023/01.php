<?php

//  class Fruit {
//    //Properties
//    public $name;
//    public $color;
//
//    //Methods
//
//    function setName($name) {
//      $this->name = $name;
//    }
//
//    function getName() {
//      return $this->name;
//    }
//    function setColor($color) {
//      $this->color=$color;
//    }
//
//    function getColor() {
//      return $this->color;
//    }
//  }

  class Fruit{
    protected $name;
    protected $color;
    const INIT_MESSAGE = "Fruit Characteristics";

    function __construct($name, $color) {
      $this->name = $name;
      $this->color = $color;
    }

    function getInitialMessage() {
      return self::INIT_MESSAGE;
    }

    function getName(){
      return $this->name;
    }

    function getColor(){
      return $this-> color;
    }
  }

  class Banana extends Fruit {

    private $weight;
    public function __construct($name, $color, $weight) {
      $this->name = $name;
      $this->color= $color;
      $this->weight= $weight;
    }

    public function message() {
      echo "\n Juju was here";
    }

    public function getColor(){
      echo "The color of banana is: {$this->color}";
    }
  }

//  echo Fruit::INIT_MESSAGE;

  $fruit = new Fruit ("Cherry", "Red");
  echo $fruit->getInitialMessage();

//  $banana = new Banana("Banana","Yellow", 50);
//  echo $banana->getName();
//  echo $banana->getColor();
//  echo $banana->message();


//  $fruit = new Fruit("Apple", "Red");
//  $fruit2 = new Fruit("Banana", "Yellow");
//
////  $fruit->setColor("Red");
////  $fruit->setName("Apple");
//
//  echo $fruit->getColor();
//  echo $fruit->getName();
////  echo"<br>";
////  echo $fruit2->getColor();
//// echo $fruit2->getName();
//
//  $fruit->name = "Apples";
//  echo $fruit->getName();



