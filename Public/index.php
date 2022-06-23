<?php 
//Definimos el Router
require '../Core/Router.php';
$router = new Router();
//añadiendo rutas
$router->add('',['controller'=>'Home', 'action' => 'index']);
$router->add('Hola',['controller'=>'Home', 'action' => 'saludo']);
$router->add('fuaeldiego',['controller'=>'xD', 'action' => 'fua']);
$router->add('fuaeldiego/diegol',['controller'=>'xD', 'action' => 'fua a casa ingle']);

//Definimos url y la comparamos con las rutas
$url = $_SERVER['QUERY_STRING'];

if($router->match($url)){
    echo '<pre>';
    var_dump($router->getParams());
    echo '<prev>';
}else{
    echo "no se ha encontrado la URL: ".$url;
}
