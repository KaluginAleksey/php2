<?php

require_once __DIR__ . '/../autoload.php';

if (!empty($_GET['id'])) {
    $article = \App\Article::findById($_GET['id']);
    if (false != $article) {
        $article->title = $_POST['title'];
        $article->text = $_POST['text'];
        $article->author = $_POST['author'];
        $article->date = $_POST['date'];

        $article->save();
    } else {
        header('Location:/php2/');
        exit();
    }
}

header('Location:/php2/');
exit();