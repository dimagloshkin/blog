<?php
return array(
    'recipes/one/([0-9]+)' => 'recipes/oneart/$1',//recipes/one/<?= $art['id'];
    'recipes/([0-9]+)' => 'recipes/recipes/$1',
    'recipes' => 'recipes/all',
    '' => 'main/index', //MainController actionIndex

);