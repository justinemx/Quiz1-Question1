<?php

    namespace Date;

    class Date {
      public static function convertDateFormat($dateString) {
        if (preg_match("/^(\d{4})-(\d{2})-(\d{2})$/", $dateString, $matches)) {
          $year = $matches[1];
          $month = $matches[2];
          $day = $matches[3];
          return "$month/$day/$year";
        } else {
          return "Invalid date format";
        }
      }
    }
