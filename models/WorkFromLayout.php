<?php

class WorkWithLayout
{
   public static function getAllCategories()
   {
      $db = ConnectionDB::getConnection();
      $sql = "SELECT * FROM `categories`";
      $stmt = $db->query($sql);
      $name_cat = $stmt->fetchAll(PDO::FETCH_ASSOC);
      return $name_cat;
   }//возвращает массив с названием категорий,id, контроллером

   public static function getNameBlog()
   {
      $db = ConnectionDB::getConnection();
      $sql = "SELECT `tittle` FROM `blog_tittle`";
      $stmt = $db->query($sql);
      $tittleBlog = $stmt->fetch(PDO::FETCH_ASSOC);
      return $tittleBlog;
   }//возвращает название блога

   public static function getFiveTopViewArt()
   {
      $db = ConnectionDB::getConnection();
      $sql = "SELECT * FROM `articles` "
            . "ORDER BY `views` DESC LIMIT 5";
      $stmt = $db->query($sql);
      $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
      return $result;

   }//массив с топ пятью читаемыми статьями

   public static function getFourTopNewArt(){
      $db = ConnectionDB::getConnection();
      $sql = "SELECT * FROM `articles` "
          . "ORDER BY `date` DESC ";
      $stmt = $db->query($sql);
      $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
      return $result;
   }//массив с статьями сортировка по дате
}