<?php

namespace Clive\Controllers;

use Clive\Models\User;
use Clive\Core\Mantle\Logger;
use Clive\Core\Mantle\Request;


class UserController{

    public function create(){

        //first_name, last_name, username, email, password, role

        $first_name = Request::form('first_name');
        $last_name = Request::form('last_name');
        $email = Request::form('email');
        $pass = Request::form('password');
        $username = Request::form('username');
        $role = Request::form('role');

        Logger::log("INFO: $first_name,$last_name,$email, $pass, $username, $role");
        
        User::create([$first_name,$last_name,$email, $pass, $username, $role]);
        
        return view('users', ['users' => User::all()]);
      
    }
}