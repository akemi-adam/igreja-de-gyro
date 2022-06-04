<?php

    /* Conexão com o banco */

$database = new SQLite3(__DIR__ . "/database/church.db");

return $database;