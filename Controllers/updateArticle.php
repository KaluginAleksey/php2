<?php

require_once __DIR__ . '/../autoload.php';
//todo добавить проверку
$article = \App\Article::findById($_GET['id']);

$article->title = $_POST['title'];
$article->text = $_POST['text'];
$article->author = $_POST['author'];
$article->date = $_POST['date'];

$article->update();

header('Location:/php2/');