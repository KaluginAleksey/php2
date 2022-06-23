<?php

namespace App;

class Logger
{
    protected string $file = __DIR__ . '/../Data/log.txt';

    public function add(\Exception $exception): void
    {

        $message = date("Y-m-d H:i:s") . ' - ' . $exception->getCode() . ' | ' . $exception->getMessage() . ' | ' .
        $exception->getFile() . ' | ' . $exception->getLine() . "\n";
        $this->file = file_put_contents($this->file, $message,  FILE_APPEND | LOCK_EX);
    }

}