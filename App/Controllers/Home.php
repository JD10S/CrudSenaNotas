<?php
namespace App\Controllers;

class Home extends \Core\Controller{
    public function index() {
        echo 'Hola desde el index paaa'; 

    }
    public function saludoAction() {
        echo 'Saludando humildemente xd';
    }
    public function argentinaAction() {
        echo '<p> Copas de argentina: <pre>'.htmlspecialchars(print_r($this->route_params, true)).'</pre> </p>';
    }
}