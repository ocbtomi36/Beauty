<?php
    /* itt az útvonal a gyökérkönyvtárba ../valami*/
    
    require '../config.php';
    require '../helper.php';
    /*
    require basePath('Framework/Router.php');
    require basePath('Framework/Database.php');
    */
    
    spl_autoload_register(function ($class) {

        $path = basePath('Framework/' . $class . 'php');
        if (file_exists($path)) {
            require $path;
        } 
    });
    
    // Instatiate the router
    $router = new Router();
    // Get current URI and HTTP method
    $uri = parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);
    $method = $_SERVER['REQUEST_METHOD'];
    
    $routes = require basePath('routes.php');

    $router->route($uri,$method);
    
?>