<?php 

namespace App\Controllers;
/**
 * It stays permanently. If i need stay but it will be deleted later.
 */
use Framework\Database;

class HomeController {
    
    public function index(){

        loadView('home');
    }

}
