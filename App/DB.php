<?php

namespace App;

class DB
{
    protected \PDO $dbh;

    public function __construct()
    {
        $config = Config::getInstance();
        $this->dbh = new \PDO($config->data['db']['dsn'], $config->data['db']['user'], $config->data['db']['password']);
    }

    public function query(string $sql, array $data = [], string $class = \stdClass::class): array|false
    {
        $sth = $this->dbh->prepare($sql);
        $sth->execute($data);
        return $sth->fetchAll(\PDO::FETCH_CLASS, $class);
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