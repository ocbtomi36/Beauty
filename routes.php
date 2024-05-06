<?php

$router->get('/','HomeController@index');
$router->get('/users','UserController@showAllUser');
$router->get('/users/create','UserController@addNewUser');
$router->get('/user','UserController@showOneUser');
/*
$router->get('/','controllers/home.php'); //home page
$router->get('/users','controllers/users/index.php'); //list all user + details button
$router->get('/users/create','controllers/users/create.php');
$router->get('/users/delete','controllers/users/delete.php');
$router->get('/users/modify','controllers/users/modify.php');
$router->get('/users/list','controllers/users/list.php');
$router->get('/user','controllers/users/show.php'); //show one user in detail
*/