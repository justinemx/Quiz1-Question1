<?php

    class Grocery {

      protected string $name;
      protected float $price;
      protected float $weight;

      public function __construct(string $name, float $price, float $weight) {
        $this->name = $name;
        $this->price = $price;
        $this->weight = $weight;
      }

      public function getName(): string {
        return $this->name;
      }

      public function getPrice(): float {
        return $this->price;
      }
      public function getWeight(): float {
        return $this->weight;
      }

      public function __toString() {
        return "$this->name ($this->weight lb): $" . round($this->price, 2) ;
      }
    }


