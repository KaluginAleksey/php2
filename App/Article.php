<?php

namespace App;

class Article extends Model
{
    protected static string $table = 'news';

    public string $title;
    public string $text;
    public string $author;
    public string $date;

    public static function findLast($qt)
    {
        $db = new DB();
        $data = $db->query(
            'SELECT * FROM ' . static::$table . ' ORDER BY id DESC LIMIT ' . $qt,
            [],
            static::class
        );
        return $data;
    }

}