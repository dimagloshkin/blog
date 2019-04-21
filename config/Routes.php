<?php
return array(
    'recipes/one/([0-9]+)' => 'recipes/oneart/$1',
    'recipes/([0-9]+)' => 'recipes/recipes/$1',
    'recipes' => 'recipes/all',

    'admin/registration' => 'admin/registration',
    'admin/articles/([0-9]+)' => 'admin/artdelete/$1',
    'admin/addedarticles' => 'admin/addart',
    'admin/addart' => 'admin/addart', //
    'admin/edit/([0-9]+)' => 'admin/editart/$1',//
    'admin/articles' => 'admin/articles',

    'admin/category/([0-9]+)' => 'admin/catdelete/$1',
    'admin/addcat' => 'admin/addcat',
    'admin/category' => 'admin/category',
    'admin/update/([0-9]+)' => 'admin/update/$1',
    'admin' => 'admin/admin',
    'exit' => 'admin/destroy',

    '' => 'main/index', //MainController actionIndex

);