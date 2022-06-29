<?php
namespace App\Controllers;
use \Core\View;
use \App\Models\Ejemplo;

class Home extends \Core\Controller{
    public function index() {
        $posts = Ejemplo::getAll();
        View::renderTemplate('index.twig', ['posts' => $posts]); 
    }
}