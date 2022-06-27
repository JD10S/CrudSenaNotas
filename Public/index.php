<?php 
require '../Vendor/autoload.php';

//Auto require
spl_autoload_register(function($class){
    $path = dirname(__DIR__);
    $file = $path.'/'.str_replace('\\','/',$class).'.php';
    if(is_readable($file)){
        require $file;
    }
});
//llamando router; 
$router = new Core\Router();
//requiriendo las rutas
require dirname(__DIR__).'/Core/Routes.php';
//llamando la función de dispatch del router
$router->dispatch($_SERVER['QUERY_STRING']);