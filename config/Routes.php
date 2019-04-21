<?php
return array(
    'recipes/one/([0-9]+)' => 'recipes/oneart/$1',//recipes/one/<?= $art['id'];
    'recipes/([0-9]+)' => 'recipes/recipes/$1',
    'recipes' => 'recipes/all',

    'admin/registration' => 'admin/registration',
    'admin/articles/([0-9]+)' => 'admin/artdelete/$1',//
    'admin/addart' => 'admin/addart',
    'admin/articles' => 'admin/articles',//

    'admin/category/([0-9]+)' => 'admin/catdelete/$1',//
    'admin/addcat' => 'admin/addcat',
    'admin/category' => 'admin/category',//
    'admin/update/([0-9]+)' => 'admin/update/$1',
    'admin' => 'admin/admin',
    'exit' => 'admin/destroy',

    '' => 'main/index', //MainController actionIndex

);