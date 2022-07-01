<?php

require __DIR__ . '/vendor/autoload.php';

$autoload = function (string $class) {
    $path = __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';
    if (file_exists($path)) {
        require $path;
    }
};

spl_autoload_register($autoload);