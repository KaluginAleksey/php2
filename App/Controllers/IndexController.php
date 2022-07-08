<?php

namespace App\Controllers;

use App\AbstractController;
use App\Article;
use SebastianBergmann\Timer\ResourceUsageFormatter;
use SebastianBergmann\Timer\Timer;

class IndexController extends AbstractController
{

    protected function action()
    {
        $timer = new Timer();
        $timer->start();
        $resource = new ResourceUsageFormatter();

        $this->view->news = Article::findLast(3);
        $this->view->timer = $timer;
        $this->view->resource = $resource;
        $this->view->display(__DIR__ . '/../../templates/index.php');
    }
}