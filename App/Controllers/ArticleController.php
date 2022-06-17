<?php

namespace App\Controllers;

use App\AbstractController;
use App\Article;

class ArticleController extends AbstractController
{

    function action()
    {
        $article = $this->view->article = Article::findById($_GET['id']);
        if ($article) {
            $this->view->display(__DIR__ . '/../../templates/article.php');
        } else {
            header('Location:/');
        }
    }
}