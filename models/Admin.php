<?php

class Admin
{

   public static function checkName($name)
   {
      $db = ConnectionDB::getConnection();
      $sql = "SELECT `name` FROM `admin`";
      $result = $db->query($sql);
      $result = $result->fetch(PDO::FETCH_ASSOC);

      if ($result['name'] == $name) {
         return true;
      } else {
         return false;
      }
   }

   public static function checkPass($pass)
   {
      $db = ConnectionDB::getConnection();
      $sql = "SELECT `pass` FROM `admin`";
      $result = $db->query($sql);
      $result = $result->fetch(PDO::FETCH_ASSOC);

      if ($result['pass'] == $pass) {
         return true;
      } else {
         return false;
      }
   }


}