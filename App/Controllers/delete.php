<?php

require_once __DIR__ . '/../../autoload.php';

if (!empty($_GET['id'])) {
    $article = \App\Article::findById($_GET['id']);
    if ($article) {
        $article->delete();
    }
}

header('Location:/php2/');
exit();
