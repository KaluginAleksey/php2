<?php

namespace App\Controllers;

use App\AbstractController;
use App\Article;
use App\Exceptions\Exception404;

class ArticleController extends AbstractController
{

    /**
     * @throws Exception404
     */
    protected function action()
    {
        $article = $this->view->article = Article::findById($_GET['id']);
        if (false != $article) {
            $this->view->display(__DIR__ . '/../../templates/article.php');
        } else {
            throw new Exception404();
        }
    }

}