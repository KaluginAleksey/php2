<?php

namespace App;

use App\Exceptions\Exception404;
use App\Exceptions\MultiException;

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

    public function update()
    {
        $data = [];
        $sets = [];
        foreach (get_object_vars($this) as $prop => $value) {
            $data[':' . $prop] = $value;
            if ('id' == $prop) {
                continue;
            }
            $sets[] = $prop . '=:' . $prop;
        }

        $sql = 'UPDATE ' . static::$table . ' SET ' . implode(',', $sets) . ' WHERE id=:id';
        $db = new DB();
        $db->execute($sql, $data);
    }

    public function insert()
    {
        $data = [];
        $sets = [];
        foreach (get_object_vars($this) as $prop => $value) {

            if ('id' == $prop) {
                continue;
            }
            if ('date' == $prop) {
                $data[':' . $prop] = date('Y-m-d');
            } else {
                $data[':' . $prop] = $value;
            }
            $sets[] = $prop;
        }
        $sql = 'INSERT INTO ' . static::$table . ' (' . implode(',', $sets) . ') 
        VALUES (' . implode(',', array_keys($data)) . ')';
        $db = new DB();
        $db->execute($sql, $data);
        $this->id = $db->lastInsertId();

    }

    public function save()
    {
        if (!empty($this->id)) {
            $this->update();
        } else {
            $this->insert();
        }
    }

    public function delete(): void
    {
        $sql = 'DELETE FROM ' . static::$table . ' WHERE id=:id';
        $db = new DB();
        $db->execute($sql, [':id' => $this->id]);

    }

    /**
     * @throws MultiException
     */
    public function fill(array $data): void
    {
        $exceptions = new MultiException();

        foreach ($data as $key => $value) {
            if (property_exists($this, $key)) {
                $methodName = 'validate' . ucfirst($key);
                if (method_exists($this, $methodName)) {
                    if (false != $this->$methodName($value)) {
                        $this->$key = $value;
                    } else {
                        $exceptions->add(new \Exception('Поле ' . $key . ' не прошло валидацию: '));
                    }
                }

            }
        }
        if (count($exceptions->all()) > 0) {
            throw $exceptions;
        }
    }
}