<?php

namespace App\Controllers;

use App\AbstractController;
use App\Article;

class UpdateArticleController extends AbstractController
{

    protected function action()
    {
        if (!empty($_GET['id'])) {
            $this->article = Article::findById($_GET['id']);
            if ($this->article) {
                $this->article->title = $_POST['title'];
                $this->article->text = $_POST['text'];
                $this->article->date = $_POST['date'];

                $this->article->save();
                header('Location:/php2/index.php?ctrl=AdminController');
                exit();
            } else {
                header('Location:/php2/index.php?ctrl=AdminController');
                exit();
            }

        }
    }
}