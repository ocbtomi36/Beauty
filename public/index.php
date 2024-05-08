<?php
require 'c:/laragon/www/Projekt_Beauty/Beauty/vendor/autoload.php';
require '../config.php';
require '../helper.php';
use Framework\Router;

//require basePath('Framework/Database.php');

//$config = require basePath('config/db.php');

//require basePath('Framework/Router.php');

$router = new Router();

$routes = require basePath('routes.php');

$uri = parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);

$router->route($uri);