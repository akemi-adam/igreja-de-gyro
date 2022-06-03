<?php

$uri = $_SERVER['REQUEST_URI'];

$routes = require __DIR__ . "/routes/default.php";

$database = require(__DIR__ . '/connection.php');

try {
    $database->exec('CREATE TABLE IF NOT EXISTS members(name VARCHAR(50), cpf VARCHAR(50), district VARCHAR(50), street VARCHAR(50), houseNumber INTEGER)');
    $database->exec('CREATE TABLE IF NOT EXISTS offers(salary REAL, member VARCHAR(50), offer REAL)');
} catch (Exception $e) {
    echo $e->getMessage();
}

foreach ($routes as $key => $value) {
    if ($uri === $key) {
        include __DIR__ . $value;
        exit();
    }
}

include __DIR__ . "/views/layouts/404.php";