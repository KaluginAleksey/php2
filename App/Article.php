<?php

require_once __DIR__ . '/Model.php';

class Article extends Model
{
    protected static string $table = 'news';

    public string $title;
    public string $text;
    public string $author;
    public string $date;

}