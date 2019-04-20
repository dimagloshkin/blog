<?php
require_once ROOT . '/models/WorkFromLayout.php';
require_once ROOT . '/models/Comment.php';
require_once ROOT . '/models/Recipes.php';
//-----------Работа с header--------------------//
$name_cat = WorkWithLayout::getAllCategories();
$titleBlog = WorkWithLayout::getNameBlog();
//------------Работа с sidebar------------------//
$topArt = WorkWithLayout::getFiveTopViewArt();
$topComments = Comment::getFiveTopComments();
$allrecipes = Recipes::getAllRecipes();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $titleBlog['tittle'];?></title>

    <!-- Bootstrap Grid -->
    <link rel="stylesheet" type="text/css" href="/template/media/assets/bootstrap-grid-only/css/grid12.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

    <!-- Custom -->
    <link rel="stylesheet" type="text/css" href="/template/media/css/style.css">
</head>

<body>

<div id="wrapper">

    <header id="header">
        <div class="header__top">
            <div class="container">
                <div class="header__top__logo">
                    <h1><?php echo $titleBlog['tittle'];?></h1>
                </div>
                <nav class="header__top__menu">
                    <ul>
                        <li><a href="/">Главная</a></li>
                        <li><a href="#">Обо мне</a></li>
                        <li><a href="/admin/registration">Админпанель</a></li>
                    </ul>
                </nav>
            </div>
        </div>

        <div class="header__bottom">
            <div class="container">
                <nav>
                    <ul>
                        <li><a href="/recipes">Все рецепты</a></li>
                        <?php
                        foreach($name_cat as $category_name):
                           ?>
                        <li><a href="/recipes/<?= $category_name['id'];?>"><?= $category_name['name_cat'];?></a></li>
                        <?php
                        endforeach;
                        ?>

                    </ul>
                </nav>
            </div>
        </div>
    </header>

