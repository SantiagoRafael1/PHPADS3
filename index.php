<?php

use core\Router;

require_once __DIR__ . '/vendor/autoload.php';

$router = new Router;

// Adicione suas rotas aqui
$router->addRoute('/', function () {
    include_once __DIR__ . '/views/home.php';
});

$router->addRoute('/login', function () {
    include_once __DIR__ . '/views/login.php';
});


?>
