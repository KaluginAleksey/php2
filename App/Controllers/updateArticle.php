<?php

use App\Article;

require_once __DIR__ . '/../../autoload.php';

if (!empty($_GET['id'])) {
    $article = Article::findById($_GET['id']);
    if ($article) {
        $article->title = $_POST['title'];
        $article->text = $_POST['text'];
        $article->author = $_POST['author'];
        $article->date = $_POST['date'];

        $article->save();
    }

}

header('Location:/php2/');
exit();