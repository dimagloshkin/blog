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
   }//возвращает массив с названием категорий,id

   public static function getAllCategoriesById($id_cat)
   {
      $db = ConnectionDB::getConnection();
      $sql = "SELECT * FROM `categories` WHERE `id` = " . $id_cat;
      $stmt = $db->query($sql);
      $name_cat = $stmt->fetch(PDO::FETCH_ASSOC);
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

   public static function getFourTopNewArt()
   {
      $db = ConnectionDB::getConnection();
      $sql = "SELECT * FROM `articles` "
          . "ORDER BY `date` DESC ";
      $stmt = $db->query($sql);
      $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
      return $result;
   }//массив с статьями сортировка по дате

   public static function addCat($cat_name)
   {
      $db = ConnectionDB::getConnection();
      $sql = "INSERT INTO `categories` SET `name_cat` = '$cat_name'";
      $db->query($sql);
   }//добавить категорию

   public static function updateCat($cat_name,$id_cat)
   {
      $db = ConnectionDB::getConnection();
      $sql = "UPDATE `categories`  SET `name_cat` = '$cat_name' WHERE `id` = $id_cat";
      $db->query($sql);

   }//изменить категорию
}