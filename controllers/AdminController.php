<?php

class AdminController
{
   public function actionRegistration()
   {
      include ROOT . '/models/Admin.php';
      if (!isset($_SESSION['admin'])) {
         $error = [];
         if (isset($_POST['admin_name']) and isset($_POST['admin_pass'])) {
            $name = $_POST['admin_name'];
            $pass = $_POST['admin_pass'];
            if (Admin::checkName($name) == false) {
               $error[] = 'Неправильное имя';
            } elseif (Admin::checkPass($pass) == false) {
               $error[] = 'Неправильный пароль';
            }
            if (empty($error)) {
               $_SESSION['admin'] = 'admin';
               header("Location: /admin");
            }
         }
         include ROOT . '/views/admin/registration/adminform.php';
      } else {
         header("Location: /admin");
      }

   }//страница входа в админпанель

   public function actionAdmin()
   {
      include ROOT . '/models/Admin.php';
      include ROOT . '/views/layout/header_admin.php';
      include ROOT . '/views/admin/admin_form/admin_index.php';
      include ROOT . '/views/layout/footer_admin.php';
   }//главная страница админки

   public function actionDestroy()
   {
      unset($_SESSION['admin']);
      header("Location: /");
   }//удаление сесиий

   public function actionCategory()
   {
      if (isset($_SESSION['admin'])) {
         include ROOT . '/models/Admin.php';
         include ROOT . '/models/WorkFromLayout.php';
         $categories = WorkWithLayout::getAllCategories();
         include ROOT . '/views/layout/header_admin.php';
         include ROOT . '/views/admin/admin_form/admin_category.php';
         include ROOT . '/views/layout/footer_admin.php';
      } else {
         header("Location: /admin/registration");
      }
   }// редакция категорий

   public function actionArticles()
   {
      if (isset($_SESSION['admin'])) {
         include ROOT . '/models/Admin.php';
         include ROOT . '/models/Recipes.php';
         $recipes = Recipes::getAllRecipes();
         include ROOT . '/views/layout/header_admin.php';
         include ROOT . '/views/admin/admin_form/admin_articlas.php';
         include ROOT . '/views/layout/footer_admin.php';
      } else {
         header("Location: /admin/registration");
      }
   }//редакция статей

   public function actionCatdelete($id_cat)
   {
      include ROOT . '/models/Recipes.php';
      include ROOT . '/models/WorkFromLayout.php';
      if (isset($_SESSION['admin'])) {
         $cat = WorkWithLayout::getAllCategoriesById($id_cat);
         $allart = Recipes::getAllRecipes();
         $idCatArt = [];
         foreach ($allart as $art_id) {
            if ($cat['id'] == $art_id['cat_id']) {
               $idCatArt[] = $art_id['id'];
            }
         }
         $db = ConnectionDB::getConnection();
         foreach ($idCatArt as $delete) {
            $sql = "DELETE  FROM `articles` WHERE `id` = $delete";
            $db->query($sql);
         }
         $sql = "DELETE  FROM `categories` WHERE `id` = $id_cat";
         $db->query($sql);
         header("Location: /admin/category");

      } else {
         header("Location: /admin/registration");
      }
   }//удалить категорию со всеми статьями по id

   public function actionArtdelete($id_art)
   {
      include ROOT . '/models/Recipes.php';
      include ROOT . '/models/WorkFromLayout.php';
      if (isset($_SESSION['admin'])) {
         $db = ConnectionDB::getConnection();
         $rec = Recipes::getOneRecipes($id_art);
         if (file_exists(ROOT . $rec['image'] . $id_art . '.jpg')) {
            unlink(ROOT . $rec['image'] . $id_art . '.jpg');
         }
         $sql = "DELETE  FROM `articles` WHERE `id` = $id_art";
         $db->query($sql);
         $sql = "DELETE  FROM `comments` WHERE `art_id` = $id_art";
         $db->query($sql);

         header("Location: /admin/articles");
      } else {
         header("Location: /admin/registration");
      }

   }//удалить саттью по id

   public function actionAddcat()
   {
      if (isset($_SESSION['admin'])) {
         include ROOT . '/models/WorkFromLayout.php';
         if (isset($_POST['name_cat'])) {
            $name_cat = $_POST['name_cat'];
            WorkWithLayout::addCat($name_cat);
            header("Location: /admin/category");
         }
         include ROOT . '/views/admin/admin_form/admin_category/add.php';
      } else {
         header("Location: /admin/registration");
      }

   }//добавление категории

   public function actionUpdate($cat_id)
   {
      if (isset($_SESSION['admin'])) {
         include ROOT . '/models/WorkFromLayout.php';
         $cat = WorkWithLayout::getAllCategoriesById($cat_id);
         if (isset($_POST['name_cat'])) {
            $name_cat = $_POST['name_cat'];
            WorkWithLayout::updateCat($name_cat, $cat_id);
            header("Location: /admin/category");
         }
         include ROOT . '/views/admin/admin_form/admin_category/update.php';
      } else {
         header("Location: /admin/registration");
      }
   }//изменение категории

   public function actionAddart()
   {
      include ROOT . '/models/Recipes.php';
      include ROOT . '/models/WorkFromLayout.php';
      if (isset($_SESSION['admin'])) {
         if (isset($_POST['submit'])) {
            $tittle = $_POST['tittle'];
            $content = $_POST['content'];
            $author = $_POST['author'];
            $category_id = $_POST['category_id'];
            $id = Recipes::addArticless($tittle, $content, $author, $category_id);
            if (is_uploaded_file($_FILES['image']['tmp_name'])) {
               // Если загружалось, переместим его в нужную папке, дадим новое имя
               move_uploaded_file($_FILES['image']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . "/template/media/images/{$id}.jpg");
            }
            header("Location: /admin/articles");
         }
         $allCat = WorkWithLayout::getAllCategories();
         include ROOT . '/views/admin/admin_form/admin_articles/add.php';
      } else {
         header("Location: /admin/registration");
      }
   }//добавить статью

   public function actionEditart($art_id)
   {
      include ROOT . '/models/Recipes.php';
      include ROOT . '/models/WorkFromLayout.php';
      if (isset($_SESSION['admin'])) {
         if (isset($_POST['submit'])) {
            $tittle = $_POST['tittle'];
            $content = $_POST['content'];
            $author = $_POST['author'];
            $category_id = $_POST['category_id'];
            $id = Recipes::addArticless($tittle, $content, $author, $category_id);
            if (is_uploaded_file($_FILES['image']['tmp_name'])) {
               // Если загружалось, переместим его в нужную папке, дадим новое имя
               move_uploaded_file($_FILES['image']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . "/template/media/images/{$id}.jpg");
            }
            header("Location: /admin/articles");
         }
         $allCat = WorkWithLayout::getAllCategories();
         $rec = Recipes::getOneRecipes($art_id);
         include ROOT . '/views/admin/admin_form/admin_articles/update.php';
      } else {
         header("Location: /admin/registration");
      }
   }//редакция статьей
}