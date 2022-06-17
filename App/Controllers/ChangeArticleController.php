<?php

namespace App\Controllers;

use App\AbstractController;
use App\Article;

class ChangeArticleController extends AbstractController
{

    protected function action()
    {
        if (!empty($_GET['id'])) {
            $this->view->article = Article::findById($_GET['id']);
            if ($this->view->article) {
                $this->view->display(__DIR__ . '/../../templates/change.php');
            } else {
                header('Location:/php2/index.php?ctrl=AdminController');
            }
        }
    }
}