<?php
    echo 'users/index.php';
    /**
     * list all users
     */

use Framework\Database;

$config = require basePath('config/db.php');
$db = new Database($config);

$users = $db->query('SELECT * FROM users LIMIT 6')->fetchAll();

    loadView('users/index',[
        'users' => $users]);

