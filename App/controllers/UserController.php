<?php 

namespace App\Controllers;

use Framework\Database;
use Framework\Validation;

class UserController {

    protected $db;

    public function __construct(){
        $config = require basePath('config/db.php');
        $this->db = new Database($config);
    }
    
    public function showAllUser(){
        $users = $this->db->query('SELECT * FROM users')->fetchAll();
        loadView('users/index', [
        'users' => $users
        ]);
    }

    public function showOneUser($params){
        $id = $params['id'] ?? '';
        $params = [
                    'id' => $id
                ];
        $user = $this->db->query('SELECT * FROM users WHERE iduser = :id', $params )->fetch();
        //Load a route of views 
        loadView('users/show',[
            'user' => $user
        ]);
    }

    public function addNewUser(){
        loadView('users/create');
    }

}
