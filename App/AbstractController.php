<?php

namespace App;

abstract class AbstractController
{
    protected View $view;

    public function __construct()
    {
        $this->view = new View();
    }

    public function access(): bool
    {
        return true;
    }

    public function dispatcher()
    {
        if ($this->access()) {
            $this->action();
        } else {
            die('Доступ закрыт');
        }
    }

    abstract protected function action();
}