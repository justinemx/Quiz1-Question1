<?php

  require_once 'Product.php';
  class Book extends Product {
    protected $author;
    protected $genre;

    public function __construct($productName, $productPrice, $author, $genre) {
      parent::__construct($productName, $productPrice);
      $this->author = $author;
      $this->genre = $genre;
    }
    public function display() {
      parent::display();
      echo "<p><strong>Author: J.K. Rowling</strong> {$this->author}</p>";
      echo "<p><strong>Genre: Fantasy</strong> {$this->genre}</p>";
    }
  }
