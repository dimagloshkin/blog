<?php
require_once ROOT . '/models/WorkFromLayout.php';
class MainController
{
   function actionIndex(){
      $name_cat = WorkWithLayout::getAllCategories();
      include ROOT . '/views/layout/header.php';
      include ROOT . '/views/main/main.php';
      include ROOT . '/views/layout/side_bar.php';
      include ROOT . '/views/layout/footer.php';

   }
}