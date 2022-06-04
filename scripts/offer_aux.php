<?php

    /* Script auxiliar para exibir os membros e determinar os values das options de um select na página offer */

$databse = require(__DIR__ . "/../connection.php");
$query = $database->query('SELECT * FROM members');

include __DIR__ . "/../views/layouts/offer.php";
