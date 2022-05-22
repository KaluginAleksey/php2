<?php

require_once __DIR__ . '/../App/DB.php';
require_once __DIR__ . '/../App/Model.php';
require_once __DIR__ . '/../App/Person.php';

$db = new DB();

$sql = 'INSERT INTO persons (name, age) VALUES (:name, :age)';
$data = [':name' => 'Синицын', ':age' => 28];

var_dump($db->execute($sql, $data));