<?php

namespace App;

use JetBrains\PhpStorm\Internal\TentativeType;


class View implements \Countable, \Iterator
{
    use MagicTrait;


    public function display($template)
    {
        echo $this->render($template);
    }

    public function render($template)
    {
        ob_start();
        include $template;
        $contents = ob_get_contents();
        ob_end_clean();
        return $contents;
    }

    public function count(): int
    {
        return count($this->data);
    }

    // Метод должен вернуть значение текущего элемента
    public function current(): mixed
    {
        return current($this->data);
    }

    // Метод должен сдвинуть "указатель" на следующий элемент
    public function next(): void
    {
        next($this->data);
    }

    // Метод должен вернуть ключ текущего элемента
    public function key(): mixed
    {
        return key($this->data);
    }

    // Метод должен проверять - не вышел ли указатель за границы?
    public function valid(): bool
    {
        return null != key($this->data);
    }

    // Метод должен поставить "указатель" на первый элемент
    public function rewind(): void
    {
        reset($this->data);
    }
}