<?php

namespace App;

use App\Exceptions\DBException;

class DB
{
    protected \PDO $dbh;

    /**
     * @throws DBException
     */
    public function __construct()
    {
        $config = Config::getInstance();
        try {
            $this->dbh = new \PDO($config->data['db']['dsn'], $config->data['db']['user'], $config->data['db']['password']);
        } catch (\PDOException $exception) {
            throw new DBException('Ошибка БД');
        }
    }

    /**
     * @throws DBException
     */
    public function query(string $sql, array $data = [], string $class = \stdClass::class): array|false
    {
        $sth = $this->dbh->prepare($sql);
        try {
            $sth->execute($data);
        } catch (\PDOException $exception) {
            throw new DBException('Неверный запрос SQL ');
        }
        return $sth->fetchAll(\PDO::FETCH_CLASS, $class);
    }

    public function queryEach(string $sql, array $data = [], string $class = \stdClass::class): \Generator
    {
        $sth = $this->dbh->prepare($sql);
        try {
            $sth->execute($data);
        } catch (\PDOException $exception) {
            throw new DBException('Неверный запрос SQL');
        }
        $sth->setFetchMode(\PDO::FETCH_CLASS, $class);
        while ($res = $sth->fetch()) {
            yield $res;
        }
    }

    public function execute(string $sql, array $data = []): bool
    {
        $sth = $this->dbh->prepare($sql);
        return $sth->execute($data);
    }

    public function lastInsertId()
    {
        return $this->dbh->lastInsertId();
    }

}