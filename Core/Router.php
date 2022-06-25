<?php 

class Router {
    protected $routes = [];
    protected $params = [];

    public function add($route, $params = []){
        $route = preg_replace('/\//', '\\/', $route);
        $route = preg_replace('/\{([a-z]+)\}/','(?P<\1>[a-z-]+)',$route);
        $route = preg_replace('/\{([a-z]+):([^\}]+)\}/','(?P<\1>\2)',$route);
        $route = '/^'.$route.'$/i';
        $this->routes[$route] = $params;
    }
    public function getRoutes(){
        return $this->routes; 
    }
    public function match($url)
    {
        foreach($this->routes as $route => $params){
            if(preg_match($route,$url,$matches)) 
            {
                foreach($matches as $key => $match){
                    if(is_string($key)){
                        $params[$key] = $match;
                    }
                }
                $this->params = $params; 
                return true;    
            }
        }
    return false;
    }
    public function dispatch($url){
        if($this->match($url)){
            $controller = $this->params['controller'];
            $controller = $this->convertToStudlyCaps($controller);
            if(class_exists($controller)){
                $controller_object = new $controller();

                $action = $this->params['action'];
                $action = $this->convertToCameCase();
                if(is_callable([$controller_object, $action])){
                    $controller_object->$action();
                }else{
                    echo 'No se ha hayado el metodo '.$action.' en el controlador '.$controller;
                }
            }else{
                echo 'No se ha hayado el controlador '.$controller;
            }
        }echo 'No se ha hayado la ruta '.$url;
    }
    public function convertToStudlyCaps($text){
        return str_replace(' ','',ucfirst(str_replace('-', ' ', $text)));
    }
    public function convertToCameCase($text){
        return lcfirst($this->convertToStudlyCaps($text));
    }
    public function getParams(){
        return $this->params; 
    }
}