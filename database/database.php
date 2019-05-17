<?php 

require_once('const.php');

  function dbConnect()
  {
    try
    {
      $db = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset=utf8',
      DB_USER, DB_PASS);
    }

    catch (PDOException $exception)
    {
      echo $exception->getMessage();
      return false;
    }
    return $db;
  }

?>