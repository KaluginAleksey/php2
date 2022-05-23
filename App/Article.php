<?php

require_once __DIR__ . '/Model.php';

class Article extends Model
{
    protected static string $table = 'news';

    public string $title;
    public string $text;
    public string $author;
    public string $date;

    public static function findLast()
    {
        $db = new DB();
        $data = $db->query(
            'SELECT * FROM ' . static::$table . ' ORDER BY id DESC LIMIT 3',
            [],
            static::class
        );
        return $data;
    }

}