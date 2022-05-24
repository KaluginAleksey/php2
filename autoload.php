<?php

$autoload = function (string $class) {
    $path = __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';
    require $path;
};

spl_autoload_register($autoload);