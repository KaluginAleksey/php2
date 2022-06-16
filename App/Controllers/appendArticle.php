<?php

require_once __DIR__ . '/../../autoload.php';

if ((!empty($_POST['title'])) && (!empty($_POST['text']))) {

    $article = new \App\Article();
    $article->title = $_POST['title'];
    $article->text = $_POST['text'];
    $article->date = $_POST['date'];

    $article->save();
}

header('Location:/php2/');
exit();
