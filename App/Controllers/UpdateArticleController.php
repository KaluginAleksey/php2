<?php

namespace App\Controllers;

use App\AbstractController;
use App\Article;

class UpdateArticleController extends AbstractController
{

    protected function action()
    {
        if (!empty($_GET['id'])) {
            $this->view->article = Article::findById($_GET['id']);
            if ($this->view->article) {
                $this->view->article->title = $_POST['title'];
                $this->view->article->text = $_POST['text'];
                $this->view->article->date = $_POST['date'];

                $this->view->article->save();
                header('Location:/php2/index.php?ctrl=AdminController');
            } else {
                header('Location:/php2/index.php?ctrl=AdminController');
            }

        }
    }
}