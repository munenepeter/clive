<?php

namespace Clive\Controllers;

use Clive\Core\Mantle\Auth;
use Clive\Core\Mantle\Request;
use Clive\Core\Mantle\Session;

class AuthController {

    public function login() {

        $email = Request::validate(Request::form('email'));
        $password = Request::validate(Request::form('password'));

        Auth::login($email, $password);
    }

    public function logout() {
        Auth::logout(Session::get('user'));
        redirect('index');
    }
}
