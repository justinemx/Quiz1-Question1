<?php

  $serverName = "localhost";
  $username = "testuser2";
  $password = "123456789";
  $dbname = "fromphpdb";

//  //MySQLi OOP
//  $dbCon = new mysqli($serverName, $username, $password, $dbname);
//  if($dbCon->connect_error){
//    die("Connection error: " . $dbCon->connect_error);
//  }
//  $query = "Create table tbl_students (
//    student_id INT(6) UNSIGNED PRIMARY KEY AUTO_INCREMENT,
//    first_name VARCHAR(30) NOT NULL,
//    last_name VARCHAR(30) NOT NULL,
//    grade DECIMAL(10,2) NOT NULL
//  )";
//
//  if($dbCon->query($query) === true){
//    echo "Table created successfully";
//  }
//  else {
//    echo "Error creating table" . $dbCon->error;
//  }

    //Procedural need fixing
//    $dbCon = mysqli_connect($serverName, $username, $password, $dbname);
//  if(!$dbCon){
//      echo "Connection failed" . mysqli_connect_error();
//    }
//
//    $query = "Create database fromphpdb";
//    if(mysqli_query($dbCon, $query)){
//      echo "Database created successfully";
//    }
//    else{
//      echo "Error creating database: " . mysqli_error($dbCon);
//    }

    //PDO
    try{
      $dbCon = new PDO("mysql:host=$serverName; dbname=fromphpdb",$username, $password);
      $dbCon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $query = "Create table tbl_students (
   student_id INT(6) UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    first_name VARCHAR(30) NOT NULL,
    last_name VARCHAR(30) NOT NULL,
    grade DECIMAL(10,2) NOT NULL
)";
      $dbCon->exec($query);
      echo "Table created successfully";

    }
    catch (PDOException $ex) {
      echo "Table creation failed {$ex->getMessage()}";
    }
