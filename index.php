<?php

    /* Variáveis */

$uri = $_SERVER['REQUEST_URI'];

$routes = require __DIR__ . "/routes/default.php";

$database = require(__DIR__ . '/connection.php');

    /* Criação das tabelas do banco */

try {
    $database->exec('CREATE TABLE IF NOT EXISTS members(name VARCHAR(50), cpf VARCHAR(50), district VARCHAR(50), street VARCHAR(50), houseNumber INTEGER, id_member INTEGER PRIMARY KEY AUTOINCREMENT)');
    $database->exec('CREATE TABLE IF NOT EXISTS offers(salary REAL, offer REAL, id_member INTEGER, id_offer INTEGER PRIMARY KEY AUTOINCREMENT)');
} catch (Exception $e) {
    echo $e->getMessage();
}

    /* Administração das rotas */

foreach ($routes as $key => $value) {
    if ($uri === $key) {
        include __DIR__ . $value;
        exit();
    }
}

include __DIR__ . "/views/layouts/404.php";