<?php

class DB
{
    protected PDO $dbh;

    public function __construct()
    {
        $config = require_once __DIR__ . '/../Data/config.php';
        $this->dbh = new PDO($config['dsn'], $config['user'], $config['password']);
    }

    public function query(string $sql, array $data = [], string $class = stdClass::class): array|false
    {
        $sth = $this->dbh->prepare($sql);
        $sth->execute($data);
        return $sth->fetchAll(PDO::FETCH_OBJ);
    }

}