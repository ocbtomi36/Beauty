<?php 

use Framework\Database;

$config = require basePath('config/db.php');
$db = new Database($config);

$users = $db->query('SELECT * FROM users LIMIT 6')->fetchAll();


loadView('home', [
    'users' => $users
]);


