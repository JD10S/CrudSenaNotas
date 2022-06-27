<?php
namespace Core;

//definiendo rutas
$router->add('',['controller'=>'Home', 'action' => 'index']);
$router->add('Hola',['controller'=>'Home', 'action' => 'saludo']);
$router->add('fuaeldiego',['controller'=>'xD', 'action' => 'fua']);
$router->add('fuaeldiego/diegol',['controller'=>'xD', 'action' => 'fua a casa ingle']);
$router->add('{controller}/{action}');
$router->add('{namespace}/{controller}/{action}');