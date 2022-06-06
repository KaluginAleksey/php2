<?php

namespace App;

class Config
{
    public $data;
    private static $instance;

    private function __construct()
    {
        $this->data = include __DIR__ . '/../Data/config.php';
    }

    public static function getInstance()
    {
        if (null == self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }

}