<?php

require_once __DIR__ . '/../../autoload.php';

$news = \App\Article::findAll();
$functions = include __DIR__ . '/../../Data/funcNews.php';
$adminDataTable = new \App\AdminDataTable($news, $functions);

$adminDataTable->render();
