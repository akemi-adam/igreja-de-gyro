<?php

    /* Script auxiliar para exibir os dados da tabela members e offers na página show */

$database = require(__DIR__ . "/../connection.php");
$queries = [
    $database->query('SELECT * FROM members'),
    $database->query('SELECT * FROM offers')
];

include __DIR__ . "/../views/layouts/show.php";