<?php

$router = $di->getRouter();

// Define your routes here
$router->addGet( "/", [ "controller" => "PhUsers", "action" => "registrar" ] );
$router->addPost( "/listarPerros", [ "controller" => "PhPerros", "action" => "listar" ] );

$router->handle($_SERVER['REQUEST_URI']);

return $router;
