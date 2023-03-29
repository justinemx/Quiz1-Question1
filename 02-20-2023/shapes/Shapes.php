<?php

    namespace shape;

    abstract class Shape {

      abstract function getSurfaceArea();

      abstract function getVolume();

    }

    class Cube extends Shape {

      protected $edge;

      /**
       * @param float $edge
       */
      public function __construct($edge) {
        $this->edge = $edge;
      }

      function getSurfaceArea() {
        return 6 * pow($this->edge, 2);
      }

      function getVolume() {
        return pow($this->edge, 3);
      }

    }

    class Sphere extends Shape {

      protected $radius;

      /**
       * @param $radius
       */
      public function __construct($radius) {
        $this->radius = $radius;
      }

      /**
       * @return mixed
       */
      public function getRadius() {
        return $this->radius;
      }
      function getSurfaceArea() {
        return 4 * M_PI * pow($this->radius, 2);
      }

      function getVolume() {
        return 4/3 * M_PI * pow($this->radius, 3);
      }

    }
