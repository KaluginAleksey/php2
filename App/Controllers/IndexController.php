<?php

namespace App\Controllers;

use App\AbstractController;
use App\Article;

class IndexController extends AbstractController
{

    protected function action()
    {
        $this->view->news = Article::findLast(3);
        $this->view->display(__DIR__ . '/../../templates/index.php');
    }
}