<?php

require_once __DIR__ . '/autoload.php';

$ctrlName = $_GET['ctrl'] ?? 'IndexController';
$ctrlClass = '\\App\\Controllers\\' . ucfirst($ctrlName);

if (!class_exists($ctrlClass)) {
    die('ERROR: Контроллер не существует!');
}

$ctrl = new $ctrlClass;
$ctrl->dispatcher();