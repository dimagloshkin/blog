<?php
require_once ROOT . '/models/Recipes.php';
require_once ROOT . '/models/Comment.php';

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
//-----------------------Добавление комментариев---------------------//
      if(isset($_POST['author']) and isset($_POST['content'])){
         $author = $_POST['author'];
         $content = $_POST['content'];
         Comment::addCommentByIdArt($art_id,$author , $content);
         header("Location: /recipes/one/" . $art_id);
      }
//-----------------------Добавляет просмотры статьи---------------------//
      if (preg_match('~^/recipes/one/[0-9]+$~', $_SERVER['REQUEST_URI'])) {
         Recipes::setViewsArtic($art_id);
      }
//---------------------------------------------------------------------//
      $arrComment = Comment::getCommentsByIdArt($art_id);
      include ROOT . '/views/layout/header.php';
      $oneRec = Recipes::getOneRecipes($art_id);
      include ROOT . '/views/recipesAll/oneart.php';
      include ROOT . '/views/layout/footer.php';
   }

}