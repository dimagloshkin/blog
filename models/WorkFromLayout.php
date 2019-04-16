<?php
require_once ROOT . '/components/connect_db.php';

class WorkWithLayout
{
   public static function getAllCategories()
   {
      $db = ConnectionDB::getConnection();
      $sql = "SELECT `name_cat` FROM `categories`";
      $stmt = $db->query($sql);
      $name_cat = $stmt->fetchAll(PDO::FETCH_COLUMN);
      return $name_cat;
   }//возвращает массив с названием категорий
}