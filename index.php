<?php

require_once __DIR__ . '/App/Article.php';

$news = Article::findAll();

include __DIR__ . '/templates/index.php';

