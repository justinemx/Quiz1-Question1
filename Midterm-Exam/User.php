<?php

    abstract class Calculate {
      abstract function getTotalSpent();
      abstract function getBalance();
    }

    class User extends Calculate {

      protected string $name;
      protected float $spendLimit;
      protected array $products;

      public function __construct(string $name, float $spendLimit, array $products) {
        $this->name = $name;
        $this->spendLimit = $spendLimit;
        $this->products = $products;
      }

      public function getName(): string {
        return $this->name;
      }

      public function getSpendLimit(): float {
        return $this->spendLimit;
      }

      public function setSpendLimit(float $spendLimit): void {
        $this->spendLimit = $spendLimit;
      }
      public function getProducts(): array {
        return $this->products;
      }

      public function setProducts(array $products): void {
        $this->products = $products;
      }

      public function getTotalSpent() {
        $totalPrice = 0;
        foreach ($this->products as $product) {
          $totalPrice += $product->getPrice();
        }
        return $totalPrice;
      }

      public function getBalance() {
        return $this->spendLimit - $this->getTotalSpending();
      }
    }
