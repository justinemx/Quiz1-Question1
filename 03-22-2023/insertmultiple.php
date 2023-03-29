<?php

  $serverName = "localhost";
  $username = "testuser2";
  $password = "123456789";
  $dbname = "fromphpdb";

  try{
    $dbCon = new PDO("mysql:host=$serverName; dbname=fromphpdb",$username, $password);
    $dbCon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $dbCon->beginTransaction();
    $query1 = "INSERT INTO tbl_students(first_name, last_name, grade)
        values ('Jericho', 'Diaz', 96.69)";
    $query2 = "INSERT INTO tbl_students(first_name, last_name, grade)
        values ('Juan', 'Cruz', 96.69)";
    $query3 = "INSERT INTO tbl_students(first_name, last_name, grade)
        values ('Maria', 'Rias', 96.69)";

    $dbCon->exec($query1);
    $dbCon->exec($query2);
    $dbCon->exec($query3);

    $dbCon->commit();
    echo "New records added";

  }
  catch(PDOException $ex){
    $dbCon->rollBack();
    echo "Table creation failed {$ex->getMessage()}";
  }
