<?php

class Recipes
{
   public static function getAllRecipes()
   {
      $db = ConnectionDB::getConnection();
      $sql = "SELECT * FROM `articles` ORDER BY `date` DESC ";
      $stmt = $db->query($sql);
      $recipes = $stmt->fetchAll(PDO::FETCH_ASSOC);
      return $recipes;
   }//возвращает массив с всеми рецептами

   public static function getRecipesByIdCat($id_cat)
   {
      $db = ConnectionDB::getConnection();
      $sql = "SELECT * FROM `articles` WHERE `cat_id` = :id";
      $result = $db->prepare($sql);
      $result->bindParam(":id", $id_cat, PDO::PARAM_INT);
      $result->execute();
      return $result->fetchAll(PDO::FETCH_ASSOC);
   }//возвращает рецепты одной категории

   public static function getOneRecipes($id_art)
   {
      $db = ConnectionDB::getConnection();
      $sql = "SELECT * FROM `articles` WHERE `id` = :id";
      $result = $db->prepare($sql);
      $result->bindParam(":id", $id_art, PDO::PARAM_INT);
      $result->execute();
      return $result->fetch(PDO::FETCH_ASSOC);

   }//возвращает рецепт по его id

   public static function setViewsArtic($id_art)
   {
      $db = ConnectionDB::getConnection();
      $sql = "UPDATE `articles`  SET `views` = `views` + 1 WHERE `id` = :id ";
      $result = $db->prepare($sql);
      $result->bindParam(':id', $id_art, PDO::PARAM_INT);
      $result->execute();
   }//добавляет просмотр к статье

   public static function addArticless($tittle, $content, $author, $category_id)
   {
      $db = ConnectionDB::getConnection();
      $sql = "INSERT INTO `articles` SET 
                          `tittle` = '$tittle' 
                           ,`content` ='$content' 
                           , `author` =  '$author '
                           ,  `cat_id` = ". $category_id;
      $result = $db->query($sql);
      if($result != false){
         return $db->lastInsertId();
      }



   }
}