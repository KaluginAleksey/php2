<?php


use App\Article;
use App\View;

require_once __DIR__ . '/../../autoload.php';

try {
    $article = new Article();
    $article->fill($_POST);
    $article->save();
} catch (\Profit\MultiException\MultiException $exceptions) {
    $view = new View();
    $view->exps = $exceptions;
    $view->display(__DIR__ . '/../../templates/exceptions.php');
}

