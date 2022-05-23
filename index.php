<?php

require_once __DIR__ . '/App/Article.php';

$news = Article::findLast();

include __DIR__ . '/templates/index.php';

