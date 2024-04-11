<?php

$config = require basePath('config/db.php');
$db = new Database($config);

$id = $_GET['id'] ?? '';

$params = [
    'id' => $id
];

$user = $db->query('SELECT * FROM users WHERE iduser = :id', $params )->fetch();


/* Load a route of views */
loadView('users/show',[
    'user' => $user
]);


?>