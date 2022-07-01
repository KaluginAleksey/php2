<?php

namespace App;

class Article extends Model
{
    protected static string $table = 'news';

    public string $title;
    public string $text;
    public int|null $author_id;
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

    /**
     * @param string $name
     * @return object
     */
    public function __get($name)
    {
        if ('author' == $name) {
            if (null != $this->author_id) {
                return Author::findById($this->author_id);
            }
        }
    }

    /**
     * @param string $name
     * @return bool|void
     */
    public function __isset($name)
    {
        if ('author' == $name) {
            return isset($this->author_id);
        }
    }

    public function validateTitle($title): bool
    {
        if (strlen($title) > 3) {
            return true;
        } else {
            return false;
        }
    }

    public function validateDate($date): bool
    {
        return time() - strtotime($date) > 0;
    }

    public function validateText($text): bool
    {
        if (strlen($text) > 20) {
            return true;
        } else {
            return false;
        }
    }

}