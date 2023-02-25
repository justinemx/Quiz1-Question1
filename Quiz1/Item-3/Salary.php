<?php

  abstract class Salary {

    protected $name;
    protected $salary;
    protected $monthStay;

    /**
     * @param $name
     * @param $salary
     * @param $monthStay
     */
    public function __construct($name, $salary, $monthStay) {
      $this->name = $name;
      $this->salary = $salary;
      $this->monthStay = $monthStay;
    }

    /**
     * @return mixed
     */
    public function getName() {
      return $this->name;
    }

    /**
     * @return mixed
     */
    public function getSalary() {
      return $this->salary;
    }

    /**
     * @return mixed
     */
    public function getMonthStay() {
      return $this->monthStay;
    }

    abstract public function calcuThirteenPay();
    abstract public function calcuHourlyRate();
  }

  class Manager extends Salary {
    public function calcuThirteenPay() {
      return 0;
    }

    public function calcuHourlyRate() {
      return number_format($this->salary/24/8, 2);
    }
  }

  class Employee extends Salary {
    public function calcuThirteenPay() {
      return number_format($this->salary * $this->monthStay/12, 2);
    }

    public function calcuHourlyRate() {
      return number_format($this->salary/24/8, 2);
    }
  }
