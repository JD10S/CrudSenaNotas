<?php
namespace App\Controllers;
use \Core\View;

class Home extends \Core\Controller{
    public function index() {
        session_start();
        $_SESSION['nombre'] = 'Juan David';
        $_SESSION['apellido'] = 'Castañeda';
        $hola = [];
        $hola['prueba'] = 'siuuuu';
        $hola['prueba2'] = 'require ./saludoxd.php';
        $data = [
            'nombre' => $_SESSION['nombre'],
            'apellido' => $_SESSION['apellido'],
            'prueba' => $hola['prueba'],
            'prueba2' => $hola['prueba2']
        ];
        View::render('index.php', $data);
    }
    public function saludoAction() {
        session_start();
        View::render('saludoxd.php',$_SESSION);
    }
    public function argentinaAction() {
        echo '<p> Copas de argentina: <pre>'.htmlspecialchars(print_r($this->route_params, true)).'</pre> </p>';
    }
}