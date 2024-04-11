<?php 
/*
return [
    '/' => 'controllers/home.php',
    '/users' => 'controllers/users/index.php',
    '/users/create' => 'controllers/users/create.php',
    '/users/delete' => 'controllers/users/delete.php',
    '/users/modify' => 'controllers/users/modify.php',
    '/users/list' => 'controllers/users/list.php',
    '/users/listAll' => 'controllers/users/listAll.php'
];
*/
$router->get('/','controllers/home.php'); //home page
$router->get('/users','controllers/users/index.php'); //list all user + details button
$router->get('/users/create','controllers/users/create.php');
$router->get('/users/delete','controllers/users/delete.php');
$router->get('/users/modify','controllers/users/modify.php');
$router->get('/users/list','controllers/users/list.php');
$router->get('/user','controllers/users/show.php'); //show one user in detail
?>