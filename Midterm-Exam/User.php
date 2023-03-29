<?php

    class User {

      protected string $name;
      protected float $spendLimit;

      /**
       * @param string $name
       * @param float $spendLimit
       */
      public function __construct(string $name, float $spendLimit) {
        $this->name = $name;
        $this->spendLimit = $spendLimit;
      }

      /**
       * @return string
       */
      public function getName(): string {
        return $this->name;
      }

      /**
       * @return float
       */
      public function getSpendLimit(): float {
        return $this->spendLimit;
      }
    }
