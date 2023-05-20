<?php

  namespace Helpers;
  class DBConnection {
    public PDO $pdo;
    //db,username,password,host,port
    public function __construct($db,$username,$password,$host,$port, $options = []) {
      $defaultOptions = [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
      ];
      $options = array_replace($defaultOptions, $options);
      $dsn = "mysql:host=$host;dbname=$db;port=$port;charset=utf8mb4";

      try{
        $this->pdo = new PDO($dsn,$username,$password,$options);
      }
      catch (PDOException $ex) {
        throw new PDOException($ex->getMessage(), (int)$ex-getCode());
      }
    }

    public function run($sql, $arg=null) : false|PDOStatement {
      if(!$arg) {
        return $this->pdo->query($sql);
      }

      $statement = $this->pdo->prepare($sql);
      $statement->execute($arg);
      return $statement;
    }
  }
