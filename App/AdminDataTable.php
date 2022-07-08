<?php

namespace App;

class AdminDataTable
{
    protected $models;
    protected $functions;

    public function __construct($models, $functions)
    {
        $this->models = $models;
        $this->functions = $functions;
    }

    //Для каждой записи (это строка таблицы) последовательно вызываются функции (каждая - это столбец таблицы), в них передается запись (модель)

    public function render()
    {
        $view = new View();
        $view->models = $this->models;
        $view->functions = $this->functions;
        echo $view->render(__DIR__ . '/../templates/admin.php');
    }

}