<?php

require_once __DIR__ . '/../autoload.php';

//todo добавить проверку на существование
$article = \App\Article::findById($_GET['id']);

include __DIR__ . '/../templates/change.php';
