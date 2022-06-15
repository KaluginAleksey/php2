<?php

require_once __DIR__ . '/autoload.php';

$news = \App\Article::findLast(3);

include __DIR__ . '/templates/index.php';

