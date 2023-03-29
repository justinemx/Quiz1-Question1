<?php

  $serverName = "localhost";
  $username = "testuser2";
  $password = "123456789";

//  MySQLi OOP
//    $dbCon = new mysqli($serverName, $username, $password);
//    if($dbCon->connect_error){
//      die("Connection failed" . $dbCon->connect_error);
//    }
//
//    $query = "Create database fromphpdb";
//    if($dbCon->query($query) === True){
//      echo "Database created successfully";
//    }
//    else {
//      echo "Error creating database: ". $dbCon->error;
//    }
//    $dbCon->close();

    //Procedural
//    $dbCon = mysqli_connect($serverName, $username, $password);
//    if(!$dbCon){
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

//    PDO
      try{
        $dbCon = new PDO("mysql:host=$serverName;",$username, $password);
        $dbCon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query = "Create database fromphpdb";
        $dbCon->exec($query);
        echo "Database created successfully";
      }
      catch (PDOException $ex){
        echo "Connection failed {$ex->getMessage()}";
      }
