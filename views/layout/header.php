<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Блог IT_Минималиста!</title>

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
                    <h1>Блог IT_Минималиста</h1>
                </div>
                <nav class="header__top__menu">
                    <ul>
                        <li><a href="#">Главная</a></li>
                        <li><a href="#">Обо мне</a></li>
                    </ul>
                </nav>
            </div>
        </div>

        <div class="header__bottom">
            <div class="container">
                <nav>
                    <ul>
                        <?php
                        foreach($name_cat as $category_name):
                           ?>
                        <li><a href="#"><?= $category_name;?></a></li>
                        <?php
                        endforeach;
                        ?>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

