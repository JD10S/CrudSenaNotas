<?php 
//llamando el autoload de composer
require dirname(__DIR__).'/Vendor/autoload.php';
//llamando router; 
$router = new Core\Router();
//requiriendo las rutas
require dirname(__DIR__).'/Core/Routes.php';
//llamando la función de dispatch del router
$router->dispatch($_SERVER['QUERY_STRING']);