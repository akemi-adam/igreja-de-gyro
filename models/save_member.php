<?php

$database = require(__DIR__ . '/../connection.php');

    /* Verifica se o método do formulário é POST, captura as informações, depois passa para um try-catch onde tentará salvar os dados armazenados em um array na tabela members. No caso de sucesso, redireciona para a homepage. Em caso de erro, uma mensagem mostrando a exception será exibida. Por fim, o banco de dados é fechado.*/

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $member = [
        $_POST['name'],
        $_POST['cpf'],
        $_POST['district'],
        $_POST['street'],
        $_POST['houseNumber']
    ];

    try {
        $database->exec("INSERT INTO members('name', 'cpf', 'district', 'street', 'houseNumber') VALUES('" . $member[0] . "', '" . $member[1] . "', '" . $member[2] . "', '" . $member[3] . "', '" . $member[4] . "')");
        include __DIR__ . "/../views/layouts/index.php";
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

$database->close();