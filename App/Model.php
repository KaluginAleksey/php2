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

    public static function findById($id): object|false
    {
        $db = new DB();
        $data = $db->query(
            'SELECT * FROM ' . static::$table . ' WHERE id=:id',
            [':id' => $id],
            static::class
        );
        return empty($data) ? false : $data[0];
    }

}