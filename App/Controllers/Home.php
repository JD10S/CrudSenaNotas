<?php
namespace App\Controllers;
use \Core\View;
use \App\Models\Post;

class Home extends \Core\Controller{
    public function index() {
        $posts = Post::getAll();
        View::renderTemplate('index.twig', ['posts' => $posts]); 
    }
    protected function saludo() {
        session_start();
        View::renderTemplate('index.twig');
    }
    public function argentinaAction() {
        echo '<p> Copas de argentina: <pre>'.htmlspecialchars(print_r($this->route_params, true)).'</pre> </p>';
    }
}