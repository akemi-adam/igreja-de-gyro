<?php

$database = require(__DIR__ . '/../connection.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $offers = [
        $_POST['salary'],
        $_POST['member']
    ];

    try {
        $database->exec("INSERT INTO offers('salary', 'member') VALUES('" . $offers[0] . "', '" . $offers[1] . "')");

        echo '<h1>TAELA CRIADA COM SUCESSO ROMERITO MEU GOSTOSO</h1>';

        $result = $database->query('SELECT * FROM offers');

        while ($line = $result->fetchArray() ) {
            echo '<p>' . $line['salary'] . ' | ' . $line['member'] . '</p>';
        }        

    } catch (Exception $e) {
        echo 'Deu erro: ' . $e->getMessage();
    }
}