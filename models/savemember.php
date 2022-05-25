<?php

$database = require(__DIR__ . '/../connection.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $member = [
        $_POST['name'],
        $_POST['cpf'],
        $_POST['district'],
        $_POST['street'],
        $_POST['houseNumber']
    ];

    try {
        /* $database->exec("INSERT INTO members('name', 'cpf', 'district', 'street', 'houseNumber') VALUES($member[0], $member[1], $member[2], $member[3], $member[4])"); */
        $database->exec("INSERT INTO members('name', 'cpf', 'district', 'street', 'houseNumber') VALUES('" . $member[0] ."', '" . $member[1] . "', '" . $member[2] . "', '" . $member[3] . "', '" . $member[4] . "')");

        echo "<h1>Dados salvos com sucesso</h1>";

        $result = $database->query('SELECT * FROM members');

        while ($line = $result->fetchArray()) {
            echo "<p>Nome: " . $line['name'] . " - CPF: " . $line['cpf'] . " - Bairro: " . $line['district'] .  " - Rua: " . $line['street'] ." - Número da casa: " . $line['houseNumber'] ."</p>";
        }
        
    } catch (Exception $e) {
        echo $e->getMessage();
        echo "<h2>Caiu no catch</h2>";
    }

}

$database->close();