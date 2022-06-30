<?php

require_once __DIR__ . '/../../autoload.php';

try {
    $article = new \App\Article();
    $article->fill($_POST);
    $article->save();
} catch (\App\Exceptions\MultiException $exceptions) {
    $view = new \App\View();
    $view->exps = $exceptions;
    $view->display(__DIR__ . '/../../templates/exceptions.php');
}
header('Location:/php2/');
exit();

