<?php

namespace App\Exceptions;

class Exception404 extends \Exception
{
    protected $message = 'Ошибка 404 - не найдено';
    protected $code = 404;

}