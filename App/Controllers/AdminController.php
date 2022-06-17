<?php

namespace App\Controllers;

use App\AbstractController;
use App\Article;

class AdminController extends AbstractController
{

    protected function action()
    {
        $this->view->news = Article::findLast(5);
        $this->view->display(__DIR__ . '/../../templates/admin.php');
    }
}