<?php

  $serverName = "localhost";
  $username = "testuser2";
  $password = "123456789";
  $dbname = "fromphpdb";

  try {
    $dbCon = new PDO("mysql:host=$serverName; dbname=fromphpdb", $username, $password);
    $dbCon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //Method 1 Param method
    $statement = $dbCon->prepare("Insert into tbl_students(first_name, last_name, grade) values (:firstname, :lastname, :grade)");
    $statement->bindParam(':firstname', $firstname);
    $statement->bindParam(':lastname', $lastname);
    $statement->bindParam(':grade', $grade);

    $firstname = "Juan";
    $lastname = "Cruz";
    $grade = 89;
    $statement->execute();
    echo "New record has been added";

    //Method 2 Bind Value
    $statement = $dbCon->prepare("Insert into tbl_students(first_name, last_name, grade) values (?,?,?)");
//    $statement->bindValue(1, 'Juan');
//    $statement->bindValue(2, 'Cruz');
//    $statement->bindValue(3, 89);
    $statement->execute(['Juan', 'Cruz', 89]);
    echo "New data added";
    
  }
  catch (PDOException $ex){
    echo $ex->getMessage();
  }
