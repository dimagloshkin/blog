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
   }

   public static function getRecipesByIdCat($id_cat)
   {
      $db = ConnectionDB::getConnection();
      $sql = "SELECT * FROM `articles` WHERE `cat_id` = :id";
      $result = $db->prepare($sql);
      $result->bindParam(":id", $id_cat, PDO::PARAM_INT);
      $result->execute();
      return $result->fetchAll(PDO::FETCH_ASSOC);
   }

   public static function getOneRecipes($id_art)
   {
      $db = ConnectionDB::getConnection();
      $sql = "SELECT * FROM `articles` WHERE `id` = :id";
      $result = $db->prepare($sql);
      $result->bindParam(":id", $id_art, PDO::PARAM_INT);
      $result->execute();
      return $result->fetch(PDO::FETCH_ASSOC);

   }
}