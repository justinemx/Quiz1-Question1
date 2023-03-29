<?php

  class Products {
    public $name;
    public $price;

    /**
     * @param $name
     * @param $price
     */
    public function __construct($name, $price) {
      $this->name = $name;
      $this->price = $price;
    }
  }

