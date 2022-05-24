<?php

require_once __DIR__ . '/autoload.php';

if (isset($_GET['id']) & $_GET['id'] != '') {
    $article = \App\Article::findById($_GET['id']);

    include __DIR__ . '/templates/article.php';
} else {
    header('Location: /php2/');
    exit();
}
