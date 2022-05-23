<?php

require_once __DIR__ . '/../App/DB.php';
require_once __DIR__ . '/../App/Model.php';
require_once __DIR__ . '/../App/Person.php';

$db = new DB();

$sql = 'INSERT INTO news (title, text, author, date) VALUES (:title, :text, :author, :date)';
$data = [
    ':title' => 'Тестовый заголовок',
    ':text' => 'В лесу родилась ёлочка',
    ':author' => 'Василий',
    ':date' => '2022-05-23',
    ];

var_dump($db->execute($sql, $data));