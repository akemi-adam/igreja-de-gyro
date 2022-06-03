<?php

$databse = require(__DIR__ . "/../connection.php");
$query = $database->query('SELECT name FROM members');

include __DIR__ . "/../views/layouts/offer.php";
