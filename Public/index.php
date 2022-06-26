<?php 
//Auto require
spl_autoload_register(function($class){
    $path = dirname(__DIR__);
    $file = $path.'/'.str_replace('\\','/',$class).'.php';
    if(is_readable($file)){
        require $file;
    }
});
$router = new Core\Router();
//añadiendo rutas utiliza '{}' para definir una variable.
$router->add('',['controller'=>'Home', 'action' => 'index']);
$router->add('Hola',['controller'=>'Home', 'action' => 'saludo']);
$router->add('fuaeldiego',['controller'=>'xD', 'action' => 'fua']);
$router->add('fuaeldiego/diegol',['controller'=>'xD', 'action' => 'fua a casa ingle']);
$router->add('{controller}/{action}');
$router->add('admin/{controller}/{action}', ['namespace' => 'Admin']);

//llamando la función de dispatch del router
$router->dispatch($_SERVER['QUERY_STRING']);