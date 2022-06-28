<?php

namespace App\Controllers;

use App\AbstractController;
use App\Article;
use App\Exceptions\Exception404;
use SebastianBergmann\Timer\ResourceUsageFormatter;
use SebastianBergmann\Timer\Timer;

class ArticleController extends AbstractController
{

    /**
     * @throws Exception404
     */
    protected function action()
    {
        $timer = new Timer();
        $timer->start();
        $resource = new ResourceUsageFormatter();

        $article = $this->view->article = Article::findById($_GET['id']);
        $this->view->resource = $resource->resourceUsage($timer->stop());
        if ($article) {
            $this->view->display(__DIR__ . '/../../templates/article.php');
        } else {
            throw new Exception404();
        }
    }

}