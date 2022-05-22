<?php

abstract class Model
{

    public int $id;

    protected static string $table = '';

    public static function findAll()
    {
        $db = new DB();
        $data = $db->query(
            'SELECT * FROM ' . static::$table,
            [],
            static::class
        );
        return $data;
    }

}