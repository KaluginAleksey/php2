<?php

namespace App;

abstract class AbstractController
{
    protected View $view;

    public function __construct()
    {
        $this->view = new View();
    }

    abstract function action();
}