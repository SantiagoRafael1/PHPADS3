<?php

namespace core;

class Router
{
    private $routes = [];

    public function __construct()
    {
        // Adicione suas rotas no construtor, se necessário
        // Exemplo: $this->addRoute('/', function () { /* ... */ });
    }

    public function addRoute($path, $callback)
    {
        $this->routes[$path] = $callback;
    }
}

?>
