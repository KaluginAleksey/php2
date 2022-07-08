<?php

namespace App\Controllers;

use App\AbstractController;
use App\Article;

class UpdateArticleController extends AbstractController
{

    protected function action()
    {
        if (!empty($_GET['id'])) {
            $article = Article::findById($_GET['id']);
            if ($article) {
                $article->title = $_POST['title'];
                $article->text = $_POST['text'];
                $article->date = $_POST['date'];

                $article->save();
            }
            header('Location:/php2/index.php?ctrl=AdminController');
            exit();

        }
    }
}