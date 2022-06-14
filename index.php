<?php

require_once __DIR__ . '/autoload.php';

$view = new \App\View();
$view->news = \App\Article::findLast();

$view->display(__DIR__ . '/templates/index.php');







