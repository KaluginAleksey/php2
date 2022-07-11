<?php

use App\AdminDataTable;
use App\Article;

require_once __DIR__ . '/../../autoload.php';

$news = Article::findAll();
$functions = include __DIR__ . '/../../Data/funcNews.php';
$adminDataTable = new AdminDataTable($news, $functions);

$adminDataTable->render();
