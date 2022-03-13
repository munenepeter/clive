<?php

namespace Clive\Controllers;

use Clive\Models\User;
use Clive\Core\Mantle\Logger;
use Clive\Core\Mantle\Request;


class UserController{

    public function create(){

        //first_name, last_name, username, email, password, role

        $first_name = Request::validate(Request::form('first_name'));
        $last_name = Request::validate(Request::form('last_name'));
        $email = Request::validate(Request::form('email'));
        $pass = Request::validate(Request::form('password'));
        $username = Request::validate(Request::form('username'));
        $role = Request::validate(Request::form('role'));

        Logger::log("INFO: $first_name,$last_name,$email, $pass, $username, $role");
        
        User::create([$first_name,$last_name,$email, $pass, $username, $role]);
        
        return view('users', ['users' => User::all()]);
      
    }
}