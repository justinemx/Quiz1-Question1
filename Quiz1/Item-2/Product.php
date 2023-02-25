<?php

  abstract class Product {
    protected $productName;
    protected $productPrice;

    /**
     * @param $productName
     * @param $productPrice
     */
    public function __construct($productName, $productPrice) {
      $this->productName = $productName;
      $this->productPrice = $productPrice;
    }

    abstract function display();

    /**
     * @return mixed
     */
    public function getProductName() {
      return $this->productName;
    }

    /**
     * @return mixed
     */
    public function getProductPrice() {
      return $this->productPrice;
    }

  }

  class Movie extends Product {
    protected $director;
    protected $rating;

    public function __construct($productName, $productPrice, $director, $rating) {
      parent::__construct($productName, $productPrice);
      $this->director = $director;
      $this->rating = $rating;
    }

    function display() {
      return "Name: " . $this->productName . "<br>Price: " . $this->productPrice . "<br>Director: " . $this->director . "<br>Rating: " . $this->rating;
    }

    public function getDirector() {
      return $this->director;
    }

    public function getRating() {
      return $this->rating;
    }

  }

  class Book extends Product {
    protected $author;
    protected $genre;

    public function __construct($productName, $productPrice, $author, $genre) {
      parent::__construct($productName, $productPrice);
      $this->author = $author;
      $this->genre = $genre;
    }

    function display() {
      return "Name: ".$this->productName . "<br>Price: ".$this->productPrice . "<br>Author: ".$this->author. "<br>Genre: ".$this->genre;
    }

    public function getAuthor() {
      return $this->author;
    }

    public function getGenre() {
      return $this->genre;
    }

  }




