<?php

  $serverName = "localhost";
  $username = "testuser2";
  $password = "123456789";

  //MySQLi Object Oriented
  $dbcon = new mysqli($serverName, $username, $password);
  if($dbcon->connect_error){
    die("Connection failed: " . $dbcon->connect_error);
  }
  echo "Database connected successfully";

  $dbcon->close();

  //MySQLi procedural
  $dbcon = mysqli_connect($serverName,$username,$password);
  if(!$dbcon){
    die("Connection failed: ". mysqli_connect_error());
  }
  echo "Database connected successfully";

  try {
    $dbcon = new PDO("mysql:host=$serverName;",$username, $password);
//  $dbcon = new PDO("mysql:host=$serverName; dbname=complexqueryexample",$username, $password);
    $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Database connected successfully";
  }
  catch(PDOException $ex){
    echo "Connection failed" . $ex->getMessage();
  }

