<?php

require_once __DIR__ . '/../autoload.php';

$news = \App\Article::findAll();

include __DIR__ . '/../templates/admin.php';