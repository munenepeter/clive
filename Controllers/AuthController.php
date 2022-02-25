<?php

namespace Clive\Controllers;

use Clive\Core\Mantle\Auth;
use Clive\Core\Mantle\Request;

class AuthController {

    public function login() {  
        
        $email = Request::validate(Request::form('email'));
        $password = Request::validate(Request::form('password'));

        Auth::login($email, $password);
    }
}
