<?php
namespace App\Controllers;
use \Core\View;

class Home extends \Core\Controller{
    public function index() {
        View::render('index.php', ['copasargentina' => '21', 'copasbrasil' => '20']);
        //View::renderTwig('index.html', ['copasargentina' => '21', 'copasbrasil' => '20']);
    }
    public function saludoAction() {
        echo 'Saludando humildemente xd';
    }
    public function argentinaAction() {
        echo '<p> Copas de argentina: <pre>'.htmlspecialchars(print_r($this->route_params, true)).'</pre> </p>';
    }
}