<?php

  require_once 'Product.php';
  class Movie extends Product {
    protected $director;
    protected $rating;

    public function __construct($productName, $productPrice, $director, $rating) {
      parent::__construct($productName, $productPrice);
      $this->director = $director;
      $this->rating = $rating;
    }

    public function display() {
      parent::display();
      echo "<p><strong>Director: Frank Darabont</strong> {$this->director}</p>";
      echo "<p><strong>Rating: 9.3/10 on IMDb</strong> {$this->rating}</p>";
    }
  }

