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
      include ROOT . '/views/layout/footer.php';
   }

   function actionRecipes($id_cat)
   {
      include ROOT . '/views/layout/header.php';
      $resById = Recipes::getRecipesByIdCat($id_cat);
      include ROOT . '/views/recipesAll/recipesById.php';
      include ROOT . '/views/layout/footer.php';

   }

   function actionOneart($art_id)
   {
      include ROOT . '/views/layout/header.php';
      $oneRec = Recipes::getOneRecipes($art_id);
      include ROOT . '/views/recipesAll/oneart.php';
      include ROOT . '/views/layout/footer.php';
   }

}