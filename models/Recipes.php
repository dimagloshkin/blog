<?php

class Recipes
{
   public static function getAllRecipes()
   {
      $db = ConnectionDB::getConnection();
      $sql = "SELECT * FROM `articles`";
      $stmt = $db->query($sql);
      $recipes = $stmt->fetchAll(PDO::FETCH_ASSOC);
      return $recipes;
   }
}