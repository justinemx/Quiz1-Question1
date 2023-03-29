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
//
//  $query = "INSERT INTO tbl_students(first_name, last_name, grade)
//  values ('Jericho', 'Diaz', 96.69)";
//
//  if($dbCon->query($query) === true){
//    echo "New record added";
//    $lastID = $dbCon->insert_id;
//    echo "Last inserted ID is: " . $lastID;
//  }
//  else {
//    echo "Error creating table" . $dbCon->error;
//  }

//  //Procedural
//  $dbCon = mysqli_connect($serverName, $username, $password);
//  if(!$dbCon){
//    echo "Connection failed" . mysqli_connect_error();
//  }
//
//  $query = "INSERT INTO tbl_students(first_name, last_name, grade)
//  values ('Jericho', 'Diaz', 96.69)";
//
//  if(mysqli_query($dbCon, $query)){
//    echo "New record has been added";
//    $lastID = mysqli_insert_id($dbCon);
//    echo "Last inserted ID is: " . $lastID;
//  }
//  else {
//    echo "Error: " . mysqli_error($dbCon);
//  }
//  mysqli_close($dbCon);

  //PDO
  try{
    $dbCon = new PDO("mysql:host=$serverName; dbname=fromphpdb",$username, $password);
    $dbCon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query = "INSERT INTO tbl_students(first_name, last_name, grade)
        values ('Jericho', 'Diaz', 96.69)";
    $dbCon->exec($query);
    echo "New record added";

    $lastID = $dbCon->lastInsertId();
    echo "Last inserted ID is: " . $lastID;
  }
  catch(PDOException $ex){
    echo "Table creation failed {$ex->getMessage()}";
  }
