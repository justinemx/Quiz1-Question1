<?php

  $serverName = "localhost";
  $username = "testuser2";
  $password = "123456789";
  $dbname = "fromphpdb";

  try{
    $dbCon = new PDO("mysql:host=$serverName; dbname=fromphpdb",$username, $password);
    $dbCon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//    $query = "Select student_id, first_name, last_name, grade from tbl_students where first_name = 'Maria'";

//    $query = "Update tbl_students set grade=90 where student_id=1";
////    $dbCon->exec($query);
//    $result = $dbCon->query($query);
//    echo $result->rowCount() . "Record updated";
//
//    $result = $dbCon->query($query,PDO::FETCH_ASSOC)->fetchAll();
//    foreach($result as $row){
//      echo "student_id: " . $row["student_id"] . "\n";
//    }

    $query = "Delete from tbl_students where student_id=1";
    $dbCon->exec($query);

  }
  catch (PDOException $ex){
    echo "Table creation failed {$ex->getMessage()}";
  }
