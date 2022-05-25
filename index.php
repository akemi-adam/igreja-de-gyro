<?php

$uri = $_SERVER['REQUEST_URI'];

$routes = require __DIR__ . "/routes/default.php";

$database = require(__DIR__ . '/connection.php');

try {
    $database->exec('CREATE TABLE IF NOT EXISTS members(name TEXT, cpf TEXT, district TEXT, street TEXT, houseNumber INTEGER)');
    
} catch (Exception $e) {
    echo $e->getMessage();
}

foreach ($routes as $key => $value) {
    if ($uri === $key) {
        include __DIR__ . $value;
        exit();
    }
}

include __DIR__ . "/views/404.php";