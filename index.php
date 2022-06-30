<?php

use App\Article;

require_once __DIR__ . '/autoload.php';

$news = Article::findLast(3);

include __DIR__ . '/templates/index.php';

