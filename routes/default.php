<?php

$routes = [
    "/" => "/views/layouts/index.php",
    "/show" => "/scripts/show_aux.php",
    "/about" => "/views/layouts/about.php",
    "/offer" => "/scripts/offer_aux.php",
    "/register" => "/views/layouts/register.php",
    "/savemember" => "/models/save_member.php",
    "/saveoffer" => "/models/save_offer.php"
];

return $routes;