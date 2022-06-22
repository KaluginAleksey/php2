<?php

require_once __DIR__ . '/autoload.php';

$ctrlName = $_GET['ctrl'] ?? 'IndexController';
$ctrlClass = '\\App\\Controllers\\' . ucfirst($ctrlName);

if (!class_exists($ctrlClass)) {
    die('ERROR: Контроллер не существует!');
}

try {
    $ctrl = new $ctrlClass;
    $ctrl->dispatcher();
} catch (\App\Exceptions\DBException $exception) {
    $view = new \App\View();
    $view->exp = $exception;
    $view->display(__DIR__ . '/templates/exception.php');
}