<?php

  class Product {
    protected $productName;
    protected $productPrice;
    public function __construct($productName, $productPrice) {
      $this->name = $productName;
      $this->price = $productPrice;
    }
    public function display() {
      echo "<p><strong>Product Name:</strong> {$this->productName}</p>";
      echo "<p><strong>Price:</strong> {$this->productPrice}</p>";
    }
  }
