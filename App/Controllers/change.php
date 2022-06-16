<?php

require_once __DIR__ . '/../../autoload.php';

if (!empty($_GET['id'])) {

    $article = \App\Article::findById($_GET['id']);

    if ($article) {
        include __DIR__ . '/../../templates/change.php';
        exit();
    }
}

header('Location:/php2/');
exit();