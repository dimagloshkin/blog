<?php

class ConnectionDB
{
   public static function getConnection()
   {
      $params = include ROOT . '/config/db_config.php';
      try {
         $dsn = "{$params['typeDb']}:host={$params['host']};dbname={$params['dbname']};charset=utf8";
         $connect = new PDO($dsn, $params['user'], $params['pass'], [PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING]);

      } catch
      (PDOException $e) {
         echo 'ERROR' . $e->getMessage();
      }
      return $connect;
   }

}