<?php 
//Definimos el Router
require '../Core/Router.php';
//llamamos los controladores
require '../App/Controllers/Home.php';
require '../App/Controllers/Xd.php';
require '../App/Controllers/Post.php';
$router = new Router();
//añadiendo rutas utiliza '{}' para definir una variable.
$router->add('',['controller'=>'Home', 'action' => 'index']);
$router->add('Hola',['controller'=>'Home', 'action' => 'saludo']);
$router->add('fuaeldiego',['controller'=>'xD', 'action' => 'fua']);
$router->add('fuaeldiego/diegol',['controller'=>'xD', 'action' => 'fua a casa ingle']);
$router->add('{controller}/{action}');

//Definimos url y la enviamos a la funcion match y esta abastraiga metodo y controlador
$url = strtolower($_SERVER['QUERY_STRING']);

/*if($router->match($url)){
    echo '<pre>';
    var_dump($router->getParams());
    echo '<prev>';
}else{
    echo "no se ha encontrado la URL: ".$url;
}*/

$router->dispatch($url);