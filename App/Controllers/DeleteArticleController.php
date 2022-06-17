<?php

namespace App\Controllers;

use App\AbstractController;
use App\Article;

class DeleteArticleController extends AbstractController
{

    protected function action()
    {
        if (!empty($_GET['id'])) {
            $this->view->article = Article::findById($_GET['id']);
            if ($this->view->article) {
                $this->view->article->delete();
                header('Location:/php2/index.php?ctrl=AdminController');
            } else {
                header('Location:/php2/index.php?ctrl=AdminController');
            }
        }
    }
}