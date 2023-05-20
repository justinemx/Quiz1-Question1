<?php

  namespace Models;

  class StudentModel {
    private int $studentID;
    private string $studentIDNumber;
    private string $studentName;
    private string $contactNumber;
    private int $yearLevel;
    private bool $status;

    /**
     * @param string $studentID
     * @param string $studentIDNumber
     * @param string $studentName
     * @param string $contactNumber
     * @param int $yearLevel
     * @param bool $status
     */
    public function __construct(int $studentID, string $studentIDNumber, string $studentName, string $contactNumber, int $yearLevel, bool $status) {
      $this->studentID = $studentID;
      $this->studentIDNumber = $studentIDNumber;
      $this->studentName = $studentName;
      $this->contactNumber = $contactNumber;
      $this->yearLevel = $yearLevel;
      $this->status = $status;
    }

    /**
     * @return string
     */
    public function getStudentID(): int {
      return $this->studentID;
    }

    /**
     * @param string $studentID
     */
    public function setStudentID(string $studentID): void {
      $this->studentID = $studentID;
    }

    /**
     * @return string
     */
    public function getStudentIDNumber(): int {
      return $this->studentIDNumber;
    }

    /**
     * @param string $studentIDNumber
     */
    public function setStudentIDNumber(string $studentIDNumber): void {
      $this->studentIDNumber = $studentIDNumber;
    }

    /**
     * @return string
     */
    public function getStudentName(): string {
      return $this->studentName;
    }

    /**
     * @param string $studentName
     */
    public function setStudentName(string $studentName): void {
      $this->studentName = $studentName;
    }

    /**
     * @return string
     */
    public function getContactNumber(): string {
      return $this->contactNumber;
    }

    /**
     * @param string $contactNumber
     */
    public function setContactNumber(string $contactNumber): void {
      $this->contactNumber = $contactNumber;
    }

    /**
     * @return int
     */
    public function getYearLevel(): int {
      return $this->yearLevel;
    }

    /**
     * @param int $yearLevel
     */
    public function setYearLevel(int $yearLevel): void {
      $this->yearLevel = $yearLevel;
    }

    /**
     * @return bool
     */
    public function isStatus(): bool {
      return $this->status;
    }

    /**
     * @param bool $status
     */
    public function setStatus(bool $status): void {
      $this->status = $status;
    }

  }
