<?php
namespace App\Controllers;

class Home extends \Core\Controller{
    public function index() {
        echo 'Hola desde el index paaa'; 
        echo '<pre>Query string: <p>'.
        htmlspecialchars(print_r($_GET, true)).'</p></pre>';

    }
    public function saludoAction() {
        echo 'Saludando humildemente xd';
    }
    public function argentinaAction() {
        echo '<p> Copas de argentina: <pre>'.htmlspecialchars(print_r($this->route_params, true)).'</pre> </p>';
    }
    protected function before(){
        echo 'el más grande ';
    }
    protected function after() {
        echo ' xd';
    }
}