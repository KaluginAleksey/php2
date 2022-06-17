<?php

namespace App\Controllers;

use App\AbstractController;
use App\Article;

class AppendArticleController extends AbstractController
{

    protected function action()
    {
        if ((!empty($_POST['title'])) && (!empty($_POST['text']))) {

            $this->view->article = new Article();
            $this->view->article->title = $_POST['title'];
            $this->view->article->text = $_POST['text'];
            $this->view->article->date = $_POST['date'];

            $this->view->article->save();
            header('Location:/php2/');
        } else {
            header('Location:/php2/');
        }
    }
}