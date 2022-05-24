<?php

require_once __DIR__ . '/autoload.php';

$news = \App\Article::findLast();

include __DIR__ . '/templates/index.php';

