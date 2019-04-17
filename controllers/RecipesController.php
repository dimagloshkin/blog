<?php
require_once ROOT . '/models/Recipes.php';
class RecipesController
{
   function actionAll()
   {
      include ROOT . '/views/layout/header.php';
      $arrRecipes = Recipes::getAllRecipes();
      $cat = WorkWithLayout::getAllCategories();
      include ROOT . '/views/recipesAll/recipes.php';
      include ROOT . '/views/layout/side_bar.php';
      include ROOT . '/views/layout/footer.php';
   }
}