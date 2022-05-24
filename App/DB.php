<?php

namespace App;

class DB
{
    protected \PDO $dbh;

    public function __construct()
    {
        $config = require_once __DIR__ . '/../Data/config.php';
        $this->dbh = new \PDO($config['dsn'], $config['user'], $config['password']);
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

}