<?php

$database = require(__DIR__ . '/../connection.php');

    /* Verifica se o método do formulário é POST, captura as informações, depois passa para um try-catch onde tentará salvar os dados armazenados em um array na tabela offers. No caso de sucesso, redireciona para a homepage. Em caso de erro, uma mensagem mostrando a exception será exibida. Por fim, o banco de dados é fechado. */

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $offers = [
        $_POST['salary'],
        $_POST['members']
    ];

    $finalOffer = $offers[0] * 0.367;

    try {
        $database->exec("INSERT INTO offers('salary', 'member', 'offer') VALUES('" . $offers[0] . "', '" . $offers[1] . "', '" . $finalOffer ."')");
        include __DIR__ . "/../views/layouts/index.php";
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

$database->close();